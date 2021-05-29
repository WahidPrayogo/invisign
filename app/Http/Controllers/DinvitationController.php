<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DinvitationController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.dinvitation');
    }
}
