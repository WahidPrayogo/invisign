<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DproductController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.dproduct');
    }
}
