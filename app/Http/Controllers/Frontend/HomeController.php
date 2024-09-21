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

        $flashSale = Product::limit(6)->get();

        return view('frontend.home', compact('allProduct', 'allBanner', 'allCategory', 'flashSale'));
    }

    // public function home()
    // {
    //     return view('frontend.product');
    // }

    public function becomeASeller()
    {
        return view('frontend.pages.become-a-seller');
    }
}
