<?php

use App\Http\Controllers\AuthenticationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\Frontend\CustomerController as FrontendCustomerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Frontend\HomeController as FrontendHomeController;
use App\Http\Controllers\Frontend\OrderController;
use App\Http\Controllers\Frontend\ProductController as FrontendProductController;
use App\Http\Controllers\Frontend\RegistrationController;

// Route::get('/', function () {
//     return view('backend.master');
// });





//For Frontend

Route::get('/',[FrontendHomeController::class,'home'])->name('home');

//customer Register and login

Route::post('/registration',[CustomerController::class, 'registration'])->name('frontend.registration');

Route::post('/customerLogin',[CustomerController::class, 'customerLogin'])->name('frontend.login');


Route::group(['middleware'=>'customer_auth'], function () {


    Route::get('/profile',[CustomerController::class, 'profile'])->name('view.profile');

    Route::get('/buynow/{productID}',[OrderController::class,'buynow'])->name('buy.now');

    Route::get('/customerLogout',[CustomerController::class, 'customerLogout'])->name('frontend.logout');

    Route::get('/checkout',[OrderController::class,'checkout'])->name('checkout');

    Route::post('/place-order',[OrderController::class, 'placeOrder'])->name('order.place');

    Route::get('/view-invoice/{productId}',[OrderController::class, 'viewInvoice'])->name('view.invoice');


});











//Order Controller


//cart item er sob kaj

Route::get('/viewCart',[OrderController::class,'viewCart'])->name('view.cart');

Route::get('/addToCart{productId}',[OrderController::class,'addToCart'])->name('add.to.cart');

Route::get('/removeAllCart',[OrderController::class,'removeAllCart'])->name('remove.all.cart');

Route::get('/remove//single/cart{productId}',[OrderController::class,'removeSingleCart'])->name('remove.single.cart');





// Route::get('/',[OrderController::class,''])->name();



//frontend product er kaj sob

Route::get('/product',[FrontendProductController::class, 'product'])->name('frontend.product');

Route::get('/show-product{productId}',[FrontendProductController::class, 'show_product'])->name('show.product');













//For Admin Panel

Route::group(['prefix' => 'admin'], function () {

//For Backend


//Login Method


Route::get('/login', [AuthenticationController::class, 'loginForm'])->name('login');

Route::post('/do-login', [AuthenticationController::class, 'doLogin'])->name('do.login');


//middleware method applied

Route::group(['middleware' => 'auth'], function () {



Route::get('/', [DashboardController::class, 'dashboard'])->name('backend.dashboard');

//Customer Related


Route::get('/customerlist', [CustomerController::class, 'list'])->name('backend.customerlist');



//Product Related



Route::get('/productlist',[ProductController::class, 'list'])->name('backend.productlist');

Route::get('/productform',[ProductController::class, 'form'])->name('backend.productform');

Route::post('/submitproductform',[ProductController::class, 'store'])->name('backend.storeproduct');




//Product View, Delete & Edit Section

Route::get('/product/view{product}',[ProductController::class, 'viewProduct'])->name('backend.viewProduct');

Route::get('/product/delete{product}',[ProductController::class, 'deleteProduct'])->name('backend.deleteProduct');

Route::get('/product/edit{product}',[ProductController::class, 'editProduct'])->name('backend.editProduct');

Route::post('/product/update{product}',[ProductController::class, 'updateProduct'])->name('backend.updateProduct');












//Logout Form

Route::get('/logout', [AuthenticationController::class, 'logout'])->name('logout');


});
});
