<?php

namespace App\Http\Controllers;

use App\Models\ProductType;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $items = ProductType::with(['product_discount'])->get();
        return view('pages.home',[
            'items' => $items
        ]);
    }
}
