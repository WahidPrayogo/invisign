<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductDetailRequest;
use App\Models\ProductDetail;
use App\Models\ProductType;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Str;



class ProductDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = ProductDetail::with(['galleries','product_type'])->simplepaginate(10);

        return view('pages.admin.product-detail.index',[
            'items' => $items
        ]);
    }

    public function search(){
        
        //menangkap data pencarian
        $search = $_GET['search'];
        $col = $_GET['column'];
        
        $items = ProductDetail::where($col,'LIKE',"%".$search."%")
            ->simplepaginate(10);
        //if there is relation $items = ProductDetail::where('title','LIKE',"%".$search."%")->with('galleries')->get();
        //return $items;

        return view('pages.admin.product-detail.index',[
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
        return view('pages.admin.product-detail.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductDetailRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        ProductDetail::create($data);
        return redirect()->route('product-detail.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = ProductDetail::with(['galleries','product_type'])->findOrfail($id);

        //return $item;

        return view('pages.admin.product-detail.detail',[
            'item' => $item
        ]);

        //return view('pages.admin.gallery.index',[
        //    'items' => $items
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
        $item = ProductDetail::findOrfail($id);
        $product_types = ProductType::all();

        return view('pages.admin.product-detail.edit',[
            'item' => $item,
            'product_types' => $product_types
        ]);
    }

    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductDetailRequest $request, $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        $item = ProductDetail::findOrfail($id);
        
        $item->update($data);

        //return $data;  
        return redirect()->route('product-detail.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = ProductDetail::findOrfail($id);
        
        $item->delete();

        return redirect()->route('product-detail.index');
    }
}
