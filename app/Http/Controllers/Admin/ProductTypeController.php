<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductTypeRequest;
use App\Models\ProductType;
use App\Models\ProductDiscount;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {       
            //$PD = ProductDiscount::get('title');
            $items = ProductType::with(['product_discount'])
            //->get();    
            ->simplepaginate(10);
            
            //echo '<pre>'; var_dump($items); echo '</pre>';
            //var_dump($items);
            //return $items;
            return view('pages.admin.product-type.index',[
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
        $product_discounts = ProductDiscount::all();
        
        return view('pages.admin.product-type.create',[
            'product_discounts' => $product_discounts
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductTypeRequest $request)
    {
        $data = $request->all();
                
        //return $data;
        ProductType::create($data);
        return redirect()->route('product-type.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = ProductType::with(['product_discount'])->findOrfail($id);

        //return $item;

        return view('pages.admin.product-type.detail',[
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
        $item = ProductType::findOrfail($id);
        $product_discounts = ProductDiscount::all();
        
        return view('pages.admin.product-type.edit',[
            'item' => $item ,
            'product_discounts' => $product_discounts
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductTypeRequest $request, $id)
    {
        $data = $request->all();
        
        $item = ProductType::findOrfail($id);
        
        $item->update($data);

        return redirect()->route('product-type.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = ProductType::findOrfail($id);
        
        $item->delete();

        return redirect()->route('product-type.index');
    }
}
