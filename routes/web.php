<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\BusinessSettingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Frontend\HomeController as FrontendHomeController;
use App\Http\Controllers\Frontend\OrderController;
use App\Http\Controllers\Frontend\ProductController as FrontendProductController;
use App\Http\Controllers\Frontend\SslCommerzPaymentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaymentController;
use Faker\Provider\ar_EG\Payment;

//For Frontend
Route::get('/', [FrontendHomeController::class, 'home'])->name('home');
Route::get('/search', [FrontendProductController::class, 'search'])->name('search');
Route::get('/user/registration', [CustomerController::class, 'userRegistration'])->name('frontend.user.registration');
Route::post('/registration', [CustomerController::class, 'registration'])->name('frontend.registration');
Route::get('/customer/login', [CustomerController::class, 'userLogin'])->name('frontend.user.login');
Route::post('/customer/login', [CustomerController::class, 'customerLogin'])->name('frontend.login');
Route::get('/all/product', [FrontendProductController::class, 'product'])->name('frontend.product');
Route::get('/show/product{productId}', [FrontendProductController::class, 'show_product'])->name('show.product');
Route::get('/viewCart', [OrderController::class, 'viewCart'])->name('view.cart');
Route::get('/addToCart{productId}', [OrderController::class, 'addToCart'])->name('add.to.cart');
Route::get('/remove//single/cart{productId}', [OrderController::class, 'removeSingleCart'])->name('remove.single.cart');
Route::get('/show/category/{categoryId}', [FrontendProductController::class, 'show_category'])->name('show.category');
Route::get('/becomeASeller', [FrontendHomeController::class, 'becomeASeller'])->name('becomeASeller');


    Route::group(['middleware' => 'customer_auth'], function () {

        Route::get('/profile', [CustomerController::class, 'profile'])->name('view.profile');
        Route::get('/delete/{singleOrder}', [CustomerController::class, 'deleteSingleOrder'])->name('delete.single.order');
        Route::get('/buynow/{productID}', [OrderController::class, 'buynow'])->name('buy.now');
        Route::get('/checkout', [OrderController::class, 'checkout'])->name('checkout');
        Route::post('/place-order', [OrderController::class, 'placeOrder'])->name('order.place');
        Route::get('/view-invoice/{productId}', [OrderController::class, 'viewInvoice'])->name('view.invoice');
        //for payment gateway
        Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
        Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);
        Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
        Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);
        Route::post('/success', [SslCommerzPaymentController::class, 'success']);
        Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
        Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);
        Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
        //logout
        Route::get('/customer/logout', [CustomerController::class, 'customerLogout'])->name('frontend.logout');

    });

// For Backend
Route::group(['prefix' => 'admin'], function () {

    Route::get('/login', [AuthenticationController::class, 'loginForm'])->name('login');
    Route::post('/do/login', [AuthenticationController::class, 'doLogin'])->name('do.login');

    Route::group(['middleware' => 'auth'], function () {

        Route::get('/', [DashboardController::class, 'dashboard'])->name('backend.dashboard');
        Route::get('/new/seller/request', [HomeController::class, 'newSellerRequest'])->name('backend.newSellerRequest');
        Route::get('/seller/list', [HomeController::class, 'sellerList'])->name('backend.sellerList');
        Route::get('/seller/commission/setting', [HomeController::class, 'sellerCommissionSetting'])->name('backend.sellerCommissionSetting');
        Route::get('/seller/subscription', [HomeController::class, 'sellerSubscription'])->name('backend.sellerSubscription');
        Route::get('/seller/payout', [HomeController::class, 'sellerPayout'])->name('backend.sellerPayout');
        Route::get('/delivery/provider', [HomeController::class, 'deliveryProvider'])->name('backend.deliveryProvider');
        Route::get('/delivery/tracking', [HomeController::class, 'deliveryTracking'])->name('backend.deliveryTracking');
        Route::get('/financial/report', [PaymentController::class, 'financialReport'])->name('backend.financialReport');
        Route::get('/financial/payout', [PaymentController::class, 'financialPayout'])->name('backend.financialPayout');
        Route::get('/financial/tax', [PaymentController::class, 'financialTax'])->name('backend.financialTax');
        Route::get('/financial/coupon', [PaymentController::class, 'financialCoupon'])->name('backend.financialCoupon');
        Route::get('/banner/list', [DashboardController::class, 'bannerlist'])->name('backend.bannerlist');
        Route::get('/banner/form', [DashboardController::class, 'bannerform'])->name('backend.bannerform');
        Route::post('/submit/banner/form', [DashboardController::class, 'bannerstore'])->name('backend.storebanner');
        Route::get('/banner/delete{product}', [DashboardController::class, 'deletebanner'])->name('backend.deleteBanner');
        Route::get('/marketting/seo', [DashboardController::class, 'markettingSeo'])->name('backend.markettingSeo');
        Route::get('/marketting/email', [DashboardController::class, 'markettingEmail'])->name('backend.markettingEmail');
        Route::get('/marketting/social/media', [DashboardController::class, 'markettingSocialMedia'])->name('backend.markettingSocialMedia');
        Route::get('/customer/list', [CustomerController::class, 'list'])->name('backend.customerlist');
        Route::get('/customer/complaint', [CustomerController::class, 'customerComplaint'])->name('backend.customerComplaint');
        Route::get('/product/review', [ProductController::class, 'productReview'])->name('backend.productReview');
        Route::get('/product/list', [ProductController::class, 'productlist'])->name('backend.productlist');
        Route::get('/add/product/form', [ProductController::class, 'productform'])->name('backend.productform');
        Route::post('/submit/product/form', [ProductController::class, 'productstore'])->name('backend.storeproduct');
        Route::get('/category/list', [ProductController::class, 'categorylist'])->name('backend.categorylist');
        Route::get('/category/form', [ProductController::class, 'categoryform'])->name('backend.categoryform');
        Route::post('/submit/category/form', [ProductController::class, 'categorystore'])->name('backend.storecategory');
        Route::get('/category/delete{product}', [ProductController::class, 'deleteCategory'])->name('backend.deleteCategory');
        Route::get('/product/view{product}', [ProductController::class, 'viewProduct'])->name('backend.viewProduct');
        Route::get('/product/delete{product}', [ProductController::class, 'deleteProduct'])->name('backend.deleteProduct');
        Route::get('/product/edit{product}', [ProductController::class, 'editProduct'])->name('backend.editProduct');
        Route::post('/product/update{product}', [ProductController::class, 'updateProduct'])->name('backend.updateProduct');
        Route::get('/b/setting/website', [BusinessSettingController::class, 'bSettingWebsite'])->name('backend.bSettingWebsite');
        Route::get('/b/setting/payment', [BusinessSettingController::class, 'bSettingPayment'])->name('backend.bSettingPayment');
        Route::get('/b/setting/currency', [BusinessSettingController::class, 'bSettingCurrency'])->name('backend.bSettingCurrency');
        Route::get('/b/setting/language', [BusinessSettingController::class, 'bSettingLanguage'])->name('backend.bSettingLanguage');
        Route::get('/b/setting/blog', [BusinessSettingController::class, 'bSettingBlog'])->name('backend.bSettingBlog');
        Route::get('/b/setting/faq', [BusinessSettingController::class, 'bSettingFAQ'])->name('backend.bSettingFAQ');
        Route::get('/logout', [AuthenticationController::class, 'logout'])->name('logout');

    });

});
