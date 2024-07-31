<?php

use App\Http\Controllers\AuthenticationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\Frontend\CustomerController as FrontendCustomerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Frontend\HomeController as FrontendHomeController;
use App\Http\Controllers\Frontend\ProductController as FrontendProductController;
use App\Http\Controllers\Frontend\SignupController as FrontendSignupController;

// Route::get('/', function () {
//     return view('backend.master');
// });

//For Frontend

Route::get('/',[FrontendHomeController::class,'home'])->name('home');

Route::post('/signup',[FrontendSignupController::class, 'store'])->name('signup.store');




Route::get('/product',[FrontendProductController::class, 'product'])->name('frontend.product');

Route::get('/show-product{productId}',[FrontendProductController::class, 'show_product'])->name('show.product');




Route::get('/customer',[FrontendCustomerController::class, 'customer'])->name('frontend.customer');

Route::post('/registration',[FrontendCustomerController::class, 'reg_store'])->name('reg.store');



























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

Route::get('/customerform',[CustomerController::class, 'form'])->name('backend.customerform');

Route::post('/submitcustomerform',[CustomerController::class, 'store'])->name('backend.storecustomer');

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
