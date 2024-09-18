<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Category;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()

    {

        $allProduct = Product::all();

        $allBanner = Banner::all();

        $allCategory=Category::all();

        return view('frontend.home', compact('allProduct', 'allBanner', 'allCategory'));
    }

    // public function home()
    // {
    //     return view('frontend.product');
    // }
}
