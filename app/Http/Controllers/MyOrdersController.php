<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Testimony;
use App\Models\ProductDetail;

use App\Http\Requests\Admin\TransactionRequest;
//use App\Http\Requests\Admin\TestimonyRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyOrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $userId = Auth::user()->id;
        $items = Transaction::with(['product_detail','user'])
                // /->join('testimonies','transactions_id','transactions.id')
                ->where('users_id','=',$userId)->simplepaginate(10);
        //$item = Testimony::with(['transaction'])-           
       //var_dump ($items);

       //$testi = Testimony::with(['transaction'])->get();
        return view('pages.myorders',[
            'items' => $items
            //'testi' => $testi         
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $id)
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        
    }

    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Transaction::with([
            'product_detail', 'user'
        ])->findOrfail($id);

        return view('pages.myorders-detail',[
            'item' => $item
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Transaction::with([
            'product_detail', 'user'
        ])->findOrfail($id);

        return view('pages.uppayment',[
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TransactionRequest $request, $id)
    {
        $data = $request->all();
        
        if ($request->file('bukti_transfer') == null){
            $data['bukti_transfer'] = '';
        }else{
            $data['bukti_transfer'] = $request->file('bukti_transfer')->store(
            'assets/transaction', 'public');
        };
        
        $item = Transaction::findOrfail($id);
                
        $item->update($data);

        return redirect()->route('myorder.index');
    }

    public function cancel(TransactionRequest $request, $id)
    {
        $data = $request->all();
        
        $item = Transaction::findOrfail($id);
                
        $item->update($data);

        return redirect()->route('myorder.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Transaction::findOrfail($id);
        
        $item->delete();

        return redirect()->route('myorder.index');
    }
}
