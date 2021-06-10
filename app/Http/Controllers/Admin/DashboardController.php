<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductDetail;
use App\Models\Transaction;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.admin.dashboard', [
            'product_detail' => ProductDetail::count(), // model
            'transaction' => Transaction::count(), // model
            'transaction_pending' => Transaction::where('transaction_status', 'PENDING')->count(), // model
            'transaction_success' => Transaction::where('transaction_status', 'SUCCESS')->count(), // model
        ]);
    }
}
