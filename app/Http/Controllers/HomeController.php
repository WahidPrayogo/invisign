<?php

namespace App\Http\Controllers;

use App\Models\ProductType;
use App\Models\Testimony;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $items = ProductType::with(['product_discount'])->where('title','LIKE','%Invitation%')->get();
        $testi = Testimony::with(['transaction'])->where('status','LIKE','SHOW')->get();
        return view('pages.home',[
            'items' => $items,
            'testi' => $testi
        ]);
    }
}
