<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TransactionRequest;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Transaction::with(['product_detail','user'])
            //->get();    
            ->simplepaginate(10);

        //return $items;
        
        return view('pages.admin.transaction.index',[
            'items' => $items
        ]);
    }

    public function search(){
        
        //menangkap data pencarian
        $search = $_GET['search'];
        $col = $_GET['column'];

        $items = Transaction::
            join('product_details','product_details.id', 'transactions.product_details_id')
            ->join('users','users.id', 'transactions.users_id')
            ->where($col,'LIKE',"%".$search."%")
            ->simplepaginate(10);
            //->get();
        //if there is relation $items = ProductDetail::where('title','LIKE',"%".$search."%")->with('galleries')->get();

        //return $items;
        return view('pages.admin.transaction.index',[
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('pages.admin.transaction.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TransactionRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        Transaction::create($data);
        return redirect()->route('transaction.index');
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

        return view('pages.admin.transaction.detail',[
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
        $item = Transaction::findOrfail($id);

        return view('pages.admin.transaction.edit',[
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
        $data['slug'] = Str::slug($request->title);

        $item = Transaction::findOrfail($id);
        
        $item->update($data);

        return redirect()->route('transaction.index');
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

        return redirect()->route('transaction.index');
    }
}
