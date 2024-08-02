<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    // all product show  ai method


    public function product()
    {
        $allProduct = Product::all();

        return view("frontend.product",compact('allProduct'));
    }


    //single page a product show method
    

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
