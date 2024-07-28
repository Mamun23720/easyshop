<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CustomerController;




// Route::get('/', function () {
//     return view('backend.master');
// });


//For Backend

Route::get('/', [DashboardController::class, 'dashboard'])->name('backend.dashboard');

Route::get('/customer',[CustomerController::class, 'customer'])->name('backend.customer');
