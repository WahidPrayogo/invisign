<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Models\Testimony;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Auth;

class MyTestimonyController extends Controller
{
    //
    public function index(Request $request, $id)
    {
//        $userId = Auth::user()->id;
        $item = Transaction::with(['testimony'])
        //->where('transaction.users_id','=',$userId)
        ->findOrFail($id);
        
        

        return view('pages.testimony.index',[
            'item' => $item
        ]);
    }

    
    public function process(Request $request, $id)
    {
        $transaction = Transaction::findOrFail($id);
        
        //$item = Testimony::with(['transaction'])->findOrFail($id);
        //return view('pages.testimony',[
        //    'item' => $item
        //]);
        
        return redirect()->route('add', $id);
    }

    public function success(Request $request, $id)
    {
       //$items = Testimony::with(['transaction'])->get();
//$ite = Transaction::findOrFail($id);
        $item = Transaction::with(['testimony'])
//->where('transaction.users_id','=',$userId)
        ->findOrFail($id);
        $data = $request->all();
        //$data->transaction->transaction_status = 'FINISH';
        $data['transaction_status'] = 'FINISH';

       $col = $_GET['testi'];
       

       //$items->testimony = $col;
       $items = Testimony::create([
        'transactions_id' => $id, 
        'testimony' => $col, 
        'status' => 'HIDDEN'
        ]);
        
        
        
        $item->update($data);
        
//        var_dump($items);
       //$items->save(); 

       //highlight_string("<?php\n\$data =\n" . var_export($transaction, true) . ";\n ? >");
       //return $transaction;


       return redirect()->route('myorder.index');
    }
}
