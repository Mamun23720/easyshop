<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $allProduct=Product::all();
        $allBanner=Banner::all();
        return view('frontend.home', compact('allProduct','allBanner'));
    }
    // public function home()
    // {
    //     return view('frontend.product');
    // }
}
