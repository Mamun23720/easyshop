<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class ProductController extends Controller
{
    public function productlist()
    {
        $allProduct=Product::paginate(10);
        return view ('backend.productlist', compact('allProduct'));
    }
    public function productform()
    {
        return view ('backend.productform');
    }
    public function productstore(Request $request)
    {
        $validation=Validator::make($request->all(),[
            'product_name'=>'required',
            'product_price'=>'required|numeric|min:5',
            'product_image'=>'required|file',
            'product_description'=>'min:5',
            'product_category'=>'required|min:2'
    ]);
        $fileName=null;
        if($request->hasFile('product_image'))
        {
            $file=$request->file('product_image');
            $fileName=date('Ymdhis').'.'.$file->getClientOriginalExtension();
            $file->storeAs('product',$fileName);
        }
        Product::create([
            'name'=>$request->product_name,
            'price'=>$request->product_price,
            'description'=>$request->product_description,
            // 'mobile'=>$request->customer_number,
            'image'=>$fileName,
            'category'=>$request->product_category
    ]);
        notify()->success("Product added successfully");
        return redirect()->route('backend.productlist');
    }
    public function viewProduct($id)
    {
            $viewProduct=Product::find($id);
            return view('backend.pages.view-product',compact('viewProduct'));
    }
    public function deleteProduct($id)
    {
        $deleteProduct=Product::find($id);
        $deleteProduct->delete();
        notify()->success("Product Deleted successfully");
        return redirect()->back();

    }
    public function editProduct($id)
    {
        $product=Product::find($id);
        $allProduct=Product::all();
        return view('backend.pages.edit-product', compact('product','allProduct'));
    }
    public function updateProduct(Request $request, $id)
    {
        $fileName=null;
        if($request->hasFile('product_image'))
        {
            $file=$request->file('product_image');
            $fileName=date('Ymdhis').'.'.$file->getClientOriginalExtension();
            $file->storeAs('product',$fileName);
        }
        $product=Product::find($id);
        $product->update([
            'name'=>$request->product_name,
            'price'=>$request->product_price,
            'description'=>$request->product_description,
            'image'=>$fileName,
    ]);
        notify()->success("Product Updated successfully");
        return redirect()->route('backend.productlist');
    }
    public function cosmeticslist()
    {
        $allProduct=Product::paginate(10);
        $cosmeticsProduct=Product::where('category','Cosmetics')->get();
        return view('backend.cosmeticsProductlist', compact('cosmeticsProduct','allProduct'));
    }
    public function accessorieslist()
    {
        $allProduct=Product::paginate(10);
        $accessoriesProduct=Product::where('category','Accessories')->get();
        return view('backend.accessoriesProductlist', compact('accessoriesProduct','allProduct'));
    }
    public function kidsfashionlist()
    {
        $allProduct=Product::paginate(10);
        $kidsfashionProduct=Product::where('category','Kids Fashion')->get();
        return view('backend.kidsfashionProductlist', compact('kidsfashionProduct','allProduct'));
    }
    public function mensfashionlist()
    {
        $allProduct=Product::paginate(10);
        $mensfashionProduct=Product::where('category','Mens Fashion')->get();
        return view('backend.mensfashionProductlist', compact('mensfashionProduct','allProduct'));
    }
    public function womensfashionlist()
    {
        $allProduct=Product::paginate(10);
        $womensfashionProduct=Product::where('category','Womens Fashion')->get();
        return view('backend.womensfashionProductlist', compact('womensfashionProduct','allProduct'));
    }
}
