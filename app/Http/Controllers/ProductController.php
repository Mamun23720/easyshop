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
    public function laptops()
    {
        $allProduct=Product::paginate(10);
        $lproduct=Product::where('category','Laptops')->get();
        return view('backend.laptops', compact('lproduct','allProduct'));
    }
    public function cameras()
    {
        $allProduct=Product::paginate(10);
        $cproduct=Product::where('category','Cameras')->get();
        return view('backend.cameras', compact('cproduct','allProduct'));
    }
    public function smartphones()
    {
        $allProduct=Product::paginate(10);
        $sproduct=Product::where('category','Smartphones')->get();
        return view('backend.smartphones', compact('sproduct','allProduct'));
    }
    public function gadgets()
    {
        $allProduct=Product::paginate(10);
        $gproduct=Product::where('category','Gadgets')->get();
        return view('backend.gadgets', compact('gproduct','allProduct'));
    }
    public function watches()
    {
        $allProduct=Product::paginate(10);
        $wproduct=Product::where('category','Watches')->get();
        return view('backend.watches', compact('wproduct','allProduct'));
    }
    public function jewelrys()
    {
        $allProduct=Product::paginate(10);
        $jproduct=Product::where('category','Jewelrys')->get();
        return view('backend.jewelrys', compact('jproduct','allProduct'));
    }
    public function helmets()
    {
        $allProduct=Product::paginate(10);
        $hproduct=Product::where('category','Helmets')->get();
        return view('backend.helmets', compact('hproduct','allProduct'));
    }
    public function cosmetics()
    {
        $allProduct=Product::paginate(10);
        $cproduct=Product::where('category','Cosmetics')->get();
        return view('backend.cosmetics', compact('cproduct','allProduct'));
    }
    public function accessories()
    {
        $allProduct=Product::paginate(10);
        $aproduct=Product::where('category','Accessories')->get();
        return view('backend.accessories', compact('aproduct','allProduct'));
    }
    public function kidsfashion()
    {
        $allProduct=Product::paginate(10);
        $kproduct=Product::where('category','Kids Fashion')->latest()->get();
        return view('backend.kidsfashion', compact('kproduct','allProduct'));
    }
    public function mensfashion()
    {
        $allProduct=Product::paginate(10);
        $mproduct=Product::where('category','Mens Fashion')->get();
        return view('backend.mensfashion', compact('mproduct','allProduct'));
    }
    public function womensfashion()
    {
        $allProduct=Product::paginate(10);
        $wproduct=Product::where('category','Womens Fashion')->get();
        return view('backend.womensfashion', compact('wproduct','allProduct'));
    }
}
