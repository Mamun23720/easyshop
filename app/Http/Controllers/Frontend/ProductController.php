<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product()
    {
        $allProduct = Product::all();

        return view("frontend.product",compact('allProduct'));
    }

    public function show_product($id)
    {
        $singleProduct=Product::find($id);

        $multipleProduct=Product::where('id','!=',$singleProduct->id)
                                ->where('category',$singleProduct->category)
                                ->limit(4)
                                ->get();
        return view('frontend.pages.single-product-show', compact('singleProduct','multipleProduct'));
    }
}
