<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DinvitationController;
use App\Http\Controllers\DproductController;
use App\Http\Controllers\OrdersController;
//use App\Http\Controllers\SordersController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [HomeController::class,'index'])->name('home');

Route::get('/designinvitation', [DinvitationController::class,'index'])->name('dinvitation');

Route::get('/designproduct', [DproductController::class,'index'])->name('dproduct');

Route::get('/orders', [OrdersController::class,'index'])->name('orders');

Route::get('/orders/sukses', [OrdersController::class,'success'])->name('orders-success');

Route::prefix('admin')
    //->namespace('Admin')
    ->group(function() {
        Route::get('/', [DashboardController::class,'index'])->name('dashboard');
    });