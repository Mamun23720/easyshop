<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Product;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    // all product show  ai method


    public function product()
    {
        $allProduct = Product::all();
        $allCategory= Category::all();
        return view("frontend.product",compact('allProduct', 'allCategory'));
    }
    public function show_product($id)
    {
        $singleProduct=Product::with('category')->find($id);
        $multipleProduct=Product::where('id','!=',$singleProduct->id)
                                ->where('category',$singleProduct->category)
                                ->limit(4)
                                ->get();
        return view('frontend.pages.single-product-show', compact('singleProduct','multipleProduct'));
    }
    public function search()
    {
      $products=Product::where('name','LIKE','%'.request()->search_key.'%')->get();
      $allCategory=Category::all();
      return view('frontend.pages.search',compact('products', 'allCategory'));
    }
}
