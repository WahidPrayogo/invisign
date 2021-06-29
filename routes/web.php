<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DinvitationController;
use App\Http\Controllers\DproductController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\MyOrdersController;
use App\Http\Controllers\MyTestimonyController;
use App\Http\Controllers\Admin\ProductDetailController;
use App\Http\Controllers\Admin\ProductDiscountController;
use App\Http\Controllers\Admin\ProductTypeController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\Admin\TestimonyController;
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

Route::resource('myorder', MyOrdersController::class);

Route::get('/myorder/cancel', [MyOrdersController::class,'cancel'])->name('cancel');

Route::post('/testi/{id}', [MyTestimonyController::class,'process'])->name('testi-process');

Route::get('/testi/{id}', [MyTestimonyController::class,'index'])->name('add');

//Route::post('/myorders/testi/add/{id}', [MyOrdersController::class,'uptesti'])
  //      ->name('up');

Route::get('/testi/sukses/{id}', [MyTestimonyController::class,'success'])
        ->name('testi-confirm');
//Route::get('/myorder', [MyOrdersController::class,'index'])->name('myorder');

//Route::delete('/delete/{id}', [MyordersController::class, 'destroy'])->name('dest');

//Route::get('/myorder/detail/{id}', [MyOrdersController::class,'show'])->name('myorder-detail');

//Route::get('/myorder/up/{id}', [MyOrdersController::class,'create'])->name('myorder-up');

//Route::post('/myorder/{id}', [MyOrdersController::class,'destroy'])
//        ->name('myorder-destroy');

Route::post('/orders/{id}', [OrdersController::class,'process'])
        ->name('orders_process')
        ->middleware(['auth','verified']);

Route::get('/orders/{id}', [OrdersController::class,'index'])
        ->name('orders')
        ->middleware(['auth','verified']);

Route::get('/orders/sukses/{id}', [OrdersController::class,'success'])
        ->name('orders-success')
        ->middleware(['auth','verified']);
// Route::get('/orders/create/{detail_id}', [OrdersController::class,'create'])
//         ->name('orders-create')
//         ->middleware(['auth','verified']);

// Route::get('/orders/remove/{detail_id}', [OrdersController::class,'remove'])
//         ->name('orders-remove')
//         ->middleware(['auth','verified']);



Route::get('/product-detail/search', [ProductDetailController::class,'search'])
        ->name('isearch');

Route::get('/transaction/search', [TransactionController::class,'search'])
        ->name('psearch');

Route::get('/gallery/search', [GalleryController::class,'search'])
        ->name('gsearch');

Route::prefix('admin')
    //->namespace('Admin')
    ->middleware(['auth','admin'])
    ->group(function() {
        Route::get('/', [DashboardController::class,'index'])->name('dashboard');

        Route::resource('product-detail', ProductDetailController::class);

        Route::resource('product-type', ProductTypeController::class);

        Route::resource('product-discount', ProductDiscountController::class);

        Route::resource('gallery', GalleryController::class);

        Route::resource('transaction', TransactionController::class);

        Route::resource('testimony', TestimonyController::class);
    
    });
    
Auth::routes(['verify' => true]);

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');