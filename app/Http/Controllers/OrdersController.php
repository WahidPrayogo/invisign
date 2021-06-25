<?php

namespace App\Http\Controllers;

use Mail;
use App\Mail\TransactionSuccess;

use App\Models\Transaction;
use App\Models\ProductDetail;

use Carbon\Carbon;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrdersController extends Controller
{
    public function index(Request $request, $id)
    {
        $item = Transaction::with(['product_detail', 'user'])->findOrFail($id);
        
        $items = ProductDetail::with(['galleries'])->findOrFail($id);
        
        return view('pages.orders',[
            'item' => $item,
            'items' => $items
            
        ]);
    }

    public function process(Request $request, $id)
    {
        $product_detail = ProductDetail::findOrFail($id);

        $transaction = Transaction::create([
            'product_details_id' => $id, 
            'users_id' => Auth::user()->id, 
            'transaction_total' => $product_detail->price - (
                                    $product_detail->price * 
                                    $product_detail->product_type->product_discount->amount),
            'transaction_status' => 'IN_CART',
        ]);

        //return $transaction;
        return redirect()->route('orders', $id);

    }

    public function success(Request $request, $id)
    {
        $transaction = Transaction::with(['product_detail.galleries', 'user'])
            ->findOrFail($id);
        $transaction->transaction_status = 'PENDING';

        $transaction->save(); 

        //highlight_string("<?php\n\$data =\n" . var_export($transaction, true) . ";\n ? >");
        //return $transaction;

        // Kirim Email Ke User Invoicenya
        Mail::to($transaction->user)->send(
            new TransactionSuccess($transaction)
        );

        return view('pages.sorders');
    }
}
