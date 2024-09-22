<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class ProductController extends Controller
{
    public function productlist()

    {

        $allProduct = Product::with('category')->paginate(20);

        return view('backend.productlist', compact('allProduct'));
    }

    public function productform()

    {

        $allCategory = Category::all();

        return view('backend.productform', compact('allCategory'));
    }

    public function productstore(Request $request)

    {

        $validation = Validator::make($request->all(), [

            'product_image' => 'required|file',
            'product_name' => 'required',
            'product_category' => 'required',
            // 'product_brand' => 'required',
            // 'product_model' => 'required',
            // 'product_color' => 'required',
            // 'product_size' => 'required',
            'product_price' => 'required|numeric|min:5',
            // 'product_discount' => 'required',
            'product_stock' => 'required',
            'product_description' => 'min:5',

        ]);

        $fileName = null;

        if ($request->hasFile('product_image')) {

            $file = $request->file('product_image');
            $fileName = date('Ymdhis') . '.' . $file->getClientOriginalExtension();
            $file->storeAs('product', $fileName);
        }

        Product::create([

            'image' => $fileName,
            'name' => $request->product_name,
            'category_id' => $request->product_category,
            'brand' => $request->product_brand,
            'model' => $request->product_model,
            'color' => $request->product_color,
            'size' => $request->product_size,
            'price' => $request->product_price,
            'discount' => $request->product_discount,
            'stock' => $request->product_stock,
            'description' => $request->product_description,

        ]);

        notify()->success("Product added successfully");

        return redirect()->route('backend.productlist');
    }

    public function viewProduct($id)

    {

        $viewProduct = Product::find($id);

        return view('backend.pages.view-product', compact('viewProduct'));
    }

    public function deleteProduct($id)

    {

        $deleteProduct = Product::find($id);

        $deleteProduct->delete();

        notify()->success("Product Deleted successfully");

        return redirect()->back();
    }

    public function editProduct($id)

    {

        $product = Product::find($id);

        $allProduct = Product::all();

        return view('backend.pages.edit-product', compact('product', 'allProduct'));
    }

    public function updateProduct(Request $request, $id)

    {

        $fileName = null;

        if ($request->hasFile('product_image')) {
            $file = $request->file('product_image');

            $fileName = date('Ymdhis') . '.' . $file->getClientOriginalExtension();

            $file->storeAs('product', $fileName);
        }

        $product = Product::find($id);

        $product->update([

            'name' => $request->product_name,
            'price' => $request->product_price,
            'description' => $request->product_description,
            'image' => $fileName,

        ]);

        notify()->success("Product Updated successfully");

        return redirect()->route('backend.productlist');
    }

    public function categorylist()

    {

        $allCategory = Category::paginate(20);

        return view('backend.categorylist', compact('allCategory'));
    }

    public function deleteCategory($id)

    {

        $deleteCategory = Category::find($id);

        $deleteCategory->delete();

        notify()->success("Category Deleted successfully");

        return redirect()->back();
    }

    public function categoryform()

    {

        return view('backend.categoryform');
    }

    public function categorystore(Request $request)

    {

        $validation = Validator::make($request->all(), [

            'category_name' => 'required',
            'category_description' => 'min:2',
            'category_image' => 'required',
        ]);

        $fileName = null;

        if ($request->hasFile('category_image')) {

            $file = $request->file('category_image');

            $fileName = date('Ymdhis') . '.' . $file->getClientOriginalExtension();

            $file->storeAs('category', $fileName);
        }

        Category::create([

            'name' => $request->category_name,
            'description' => $request->category_description,
            'image' => $fileName,

        ]);

        notify()->success("Category added successfully");

        return redirect()->route('backend.categorylist');
    }
}
