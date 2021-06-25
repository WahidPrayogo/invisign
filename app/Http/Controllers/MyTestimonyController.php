<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Models\Testimony;
use Illuminate\Http\Request;

class MyTestimonyController extends Controller
{
    //
    public function index(Request $request, $id)
    {
        $item = Testimony::with(['transaction'])->findOrFail($id);
        
        return view('pages.testimony',[
            'item' => $item
        ]);
    }

    
    public function process(Request $request, $id)
    {
        $transaction = Transaction::findOrFail($id);


        $testimony = Testimony::create([
            'transactions_id' => $id, 
            'testimony' => '', 
            'status' => 'HIDDEN'
        ]);
        
        return redirect()->route('add', $id);

    }

    public function success(Request $request, $id)
    {
       $items = Testimony::with(['transaction'])->findOrFail($id);
       
       $col = $_GET['testi'];
       

       $items->testimony = $col;

       $items->save(); 

       //highlight_string("<?php\n\$data =\n" . var_export($transaction, true) . ";\n ? >");
       //return $transaction;


       return redirect()->route('myorder.index');
    }
}
