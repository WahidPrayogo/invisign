<?php

namespace App\Http\Controllers;

use App\Models\ProductDetail;
use Illuminate\Http\Request;

class DesignInvitationController extends Controller
{
    public function index(Request $request)
    {
        $items = ProductDetail::with(['galleries'])->get();
        return view('pages.product.design-invitation',[
            'items' => $items
        ]);
    }
}
