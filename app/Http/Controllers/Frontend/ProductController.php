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

        return view('frontend.product', compact('allProduct'));

    }

    public function show_product($id)

    {

        $singleProduct = Product::with('category')->find($id);

        $multipleProduct = Product::where('id', '!=', $singleProduct->id)
            ->where('category_id', '=', $singleProduct->category_id)
            ->limit(4)
            ->get();

        return view('frontend.pages.single-product-show', compact('singleProduct', 'multipleProduct'));

    }



    public function show_category($id)

    {


        $allproducts = Product::where('category_id', $id)
        $allproducts = Product::where('category_id', $id)
                            ->get();

        return view('frontend.pages.category-item-show', compact('products', 'allproducts'));

    }

    public function search()

    {

        $products = Product::where('name', 'LIKE', '%' . request()->search_key . '%')
            ->get();

        $allCategory = Category::all();

        return view('frontend.pages.search', compact('products', 'allCategory'));
        
    }
}
