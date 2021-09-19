<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductDiscountRequest;
use App\Models\ProductDiscount;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductDiscountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $items = ProductDiscount::simplePaginate(10);    
            
        //return $items;
        
        return view('pages.admin.product-discount.index',[
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
        return view('pages.admin.product-discount.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     
        $data = $request->all();
        $data['amount'] = $request->amount / 100;
        $data['status'] = 'ACTIVE';
        //$data ['amount'] = $request->data('amount')/100;
        
        //return $data;
        ProductDiscount::create($data);
        return redirect()->route('product-discount.index');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$item = ProductDiscount::findOrfail($id);

        //return $item;

        //return view('pages.admin.product-discount.detail',[
        //    'item' => $item
        //]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = ProductDiscount::findOrfail($id);
        //$item['start_at'] = Carbon::date('Y-m-d', time());
        //$item['end_at'] = date('Y-m-d', time());
        
        // /return $item;
        return view('pages.admin.product-discount.edit',[
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
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $data['amount'] = $request->amount / 100;
        
        $item = ProductDiscount::findOrfail($id);
        
        $item->update($data);

        return redirect()->route('product-discount.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = ProductDiscount::findOrfail($id);
        
        $item->delete();

        return redirect()->route('product-discount.index');
    }
}
