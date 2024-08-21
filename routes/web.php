<?php

use App\Http\Controllers\AuthenticationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Frontend\HomeController as FrontendHomeController;
use App\Http\Controllers\Frontend\OrderController;
use App\Http\Controllers\Frontend\ProductController as FrontendProductController;
use App\Http\Controllers\SslCommerzPaymentController;

//For Frontend
Route::get('/',[FrontendHomeController::class,'home'])->name('home');
Route::post('/registration',[CustomerController::class, 'registration'])->name('frontend.registration');
Route::post('/customer/login',[CustomerController::class, 'customerLogin'])->name('frontend.login');
Route::get('/product',[FrontendProductController::class, 'product'])->name('frontend.product');
Route::get('/show/product{productId}',[FrontendProductController::class, 'show_product'])->name('show.product');
Route::get('/viewCart',[OrderController::class,'viewCart'])->name('view.cart');
Route::get('/addToCart{productId}',[OrderController::class,'addToCart'])->name('add.to.cart');
Route::get('/removeAllCart',[OrderController::class,'removeAllCart'])->name('remove.all.cart');
Route::get('/remove//single/cart{productId}',[OrderController::class,'removeSingleCart'])->name('remove.single.cart');
Route::get('/view/cart',[OrderController::class,'viewCart'])->name('view.cart');
Route::get('/add/to/cart{productId}',[OrderController::class,'addToCart'])->name('add.to.cart');
Route::get('/remove/single/cart{productId}',[OrderController::class,'removeSingleCart'])->name('remove.single.cart');
Route::get('/remove/all/cart',[OrderController::class,'removeAllCart'])->name('remove.all.cart');

    Route::group(['middleware'=>'customer_auth'], function () {
            Route::get('/profile',[CustomerController::class, 'profile'])->name('view.profile');
            Route::get('/delete/{singleOrder}',[CustomerController::class, 'deleteSingleOrder'])->name('delete.single.order');
            Route::get('/buynow/{productID}',[OrderController::class,'buynow'])->name('buy.now');
            Route::get('/customer/logout',[CustomerController::class, 'customerLogout'])->name('frontend.logout');
            Route::get('/checkout',[OrderController::class,'checkout'])->name('checkout');
            Route::post('/place-order',[OrderController::class, 'placeOrder'])->name('order.place');
            Route::get('/view-invoice/{productId}',[OrderController::class, 'viewInvoice'])->name('view.invoice');
            //for payment gateway
            Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
            Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);
            Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
            Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);
            Route::post('/success', [SslCommerzPaymentController::class, 'success']);
            Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
            Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);
            Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
            //for payment gateway

    });


// For Backend
Route::group(['prefix' => 'admin'], function () {

    Route::get('/login', [AuthenticationController::class, 'loginForm'])->name('login');
    Route::post('/do/login', [AuthenticationController::class, 'doLogin'])->name('do.login');

        Route::group(['middleware' => 'auth'], function () {
            Route::get('/', [DashboardController::class, 'dashboard'])->name('backend.dashboard');
            Route::get('/customer/list', [CustomerController::class, 'list'])->name('backend.customerlist');
            Route::get('/product/list',[ProductController::class, 'productlist'])->name('backend.productlist');
            Route::get('/product/form',[ProductController::class, 'productform'])->name('backend.productform');
            Route::post('/submit/product/form',[ProductController::class, 'productstore'])->name('backend.storeproduct');
            Route::get('/product/laptop/list',[ProductController::class, 'laptops'])->name('backend.product.laptop.list');
            Route::get('/product/camera/list',[ProductController::class, 'cameras'])->name('backend.product.camera.list');
            Route::get('/product/smartphone/list',[ProductController::class, 'smartphones'])->name('backend.product.smartphone.list');
            Route::get('/product/gadget/list',[ProductController::class, 'gadgets'])->name('backend.product.gadget.list');
            Route::get('/product/watch/list',[ProductController::class, 'watchs'])->name('backend.product.watch.list');
            Route::get('/product/jewelry/list',[ProductController::class, 'jewelrys'])->name('backend.product.jewelry.list');
            Route::get('/product/helmet/list',[ProductController::class, 'helmets'])->name('backend.product.helmet.list');
            Route::get('/product/cosmetics/list',[ProductController::class, 'cosmetics'])->name('backend.product.cosmetics.list');
            Route::get('/product/accessories/list',[ProductController::class, 'accessories'])->name('backend.product.accessories.list');
            Route::get('/product/kids/fashion/list',[ProductController::class, 'kidsfashion'])->name('backend.product.kids.fashion.list');
            Route::get('/product/mens/fashion/list',[ProductController::class, 'mensfashion'])->name('backend.product.mens.fashion.list');
            Route::get('/product/womens/fashion/list',[ProductController::class, 'womensfashion'])->name('backend.product.womens.fashion.list');
            Route::get('/product/view{product}',[ProductController::class, 'viewProduct'])->name('backend.viewProduct');
            Route::get('/product/delete{product}',[ProductController::class, 'deleteProduct'])->name('backend.deleteProduct');
            Route::get('/product/edit{product}',[ProductController::class, 'editProduct'])->name('backend.editProduct');
            Route::post('/product/update{product}',[ProductController::class, 'updateProduct'])->name('backend.updateProduct');
            Route::get('/logout', [AuthenticationController::class, 'logout'])->name('logout');
        });
});
