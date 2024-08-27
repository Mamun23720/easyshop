<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $allProduct = Product::all();

        return view('frontend.home',compact('allProduct'));
    }

    // public function home()
    // {
    //     return view('frontend.product');
    // }
}
