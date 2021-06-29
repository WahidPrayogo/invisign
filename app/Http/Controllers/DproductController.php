<?php

namespace App\Http\Controllers;

use App\Models\ProductDetail;
use App\Models\ProductType;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DproductController extends Controller
{
    public function index(Request $request)
    {
        $items = ProductDetail::join('product_types','product_types.id', 'product_details.product_types_id')
                ->with(['galleries','product_type'])
                ->where('product_types.title','LIKE','%Vector%')->get();
        

        return view('pages.dproduct',[
            'items' => $items
        ]);
    }
}
