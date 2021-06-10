<?php

namespace App\Http\Controllers;

use App\Models\ProductDetail;
use Illuminate\Http\Request;

class DinvitationController extends Controller
{
    public function index(Request $request)
    {
        $items = ProductDetail::with(['galleries'])->get();
        return view('pages.dinvitation',[
            'items' => $items
        ]);
    }
}
