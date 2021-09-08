<?php

namespace App\Http\Controllers;

use Mail;
use App\Mail\TransactionSuccess;

use App\Models\Transaction;
use App\Models\ProductDetail;

use Carbon\Carbon;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

// use Midtrans\Config;
// use Midtrans\Snap;

class OrdersController extends Controller
{
    public function index(Request $request, $id)
    {
        $item = Transaction::with(['product_detail', 'user'])->findOrFail($id);
        
        //$item = ProductDetail::with(['galleries'])->findOrFail($id);
        
        return view('pages.checkout.index',[
            'item' => $item
        //    'items' => $items
            
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
            'transaction_status' => 'IN_CART'
        ]);

        //return $transaction;
        return redirect()->route('orders', $transaction->id);

    }

    public function success(Request $request, $id)
    {
        $transaction = Transaction::with(['product_detail.galleries', 'user'])
            ->findOrFail($id);
        $transaction['transaction_status'] = 'PENDING';

        $transaction->save(); 

        //configurasi midtrans

        // Config::$serverKey = config('midtrans.serverKey');
        // Config::$isProduction = config('midtrans.isProduction');
        // Config::$isSanitized = config('midtrans.isSanitized');
        // Config::$is3ds = config('midtrans.is3ds');

        //arrayuntuk dikirim ke midtrans
        // $midtrans_params = [
        //     'transaction_details' => [
        //         'order_id' => 'TEST-' . $transaction->id ,
        //         'gross_amount' => (int) $transaction->transaction_total,
        //     ],

        //     'customer_details' => [
        //         'first_name' => $transaction->user->name,
        //         'phone' => "085555555555",
        //         'email' => $transaction->user->email,
        //         'billing_address' => [
        //             'first_name' => $transaction->user->name,
        //             'phone' => "085555555555",
        //             'email' => $transaction->user->email,
        //             'address' => "Purwokerto",
        //         ]
        //     ],
        //     'enabled_payments' => ['gopay'],
        //     'vtweb' => []
        // ];

        // try {
        //     //Ambil halaman payment midtrans
        //     $paymentUrl = Snap::createTransaction($midtrans_params)->redirect_url;

        //     //redirect ke halaman midtrans
        //     header('Location: ' . $paymentUrl);

        // } catch (Exception $e) {
        //     echo $e->getMessage();
        // }


        //highlight_string("<?php\n\$data =\n" . var_export($transaction, true) . ";\n ? >");
        //return $transaction;

       // Kirim Email Ke User Invoicenya
        Mail::to($transaction->user)->send(
            new TransactionSuccess($transaction)
        );

        return view('pages.notification.success-orders');
    }
}
