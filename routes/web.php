<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DinvitationController;
use App\Http\Controllers\DproductController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\Admin\ProductDetailController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\TransactionController;
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

Route::post('/orders/{id}', [OrdersController::class,'process'])
        ->name('orders_process')
        ->middleware(['auth','verified']);

Route::get('/orders/{id}', [OrdersController::class,'index'])
        ->name('orders')
        ->middleware(['auth','verified']);

// Route::get('/orders/create/{detail_id}', [OrdersController::class,'create'])
//         ->name('orders-create')
//         ->middleware(['auth','verified']);

// Route::get('/orders/remove/{detail_id}', [OrdersController::class,'remove'])
//         ->name('orders-remove')
//         ->middleware(['auth','verified']);

Route::get('/orders/sukses/{id}', [OrdersController::class,'success'])
        ->name('orders-success')
        ->middleware(['auth','verified']);

Route::prefix('admin')
    //->namespace('Admin')
    ->middleware(['auth','admin'])
    ->group(function() {
        Route::get('/', [DashboardController::class,'index'])->name('dashboard');

        Route::resource('product-detail', ProductDetailController::class);

        Route::resource('gallery', GalleryController::class);

        Route::resource('transaction', TransactionController::class);
    
    });
    
Auth::routes(['verify' => true]);

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');