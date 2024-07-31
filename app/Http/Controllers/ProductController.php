<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class ProductController extends Controller
{
    public function list()
    {
        $allProduct=Product::paginate(20);

        return view ('backend.productlist', compact('allProduct'));
    }

    public function form()
    {
        return view ('backend.productform');
    }



    //for Database input


    public function store(Request $request)
    {

        $validation=Validator::make($request->all(),[
            'product_name'=>'required',
            'product_price'=>'required|numeric|min:5',
            'product_image'=>'required|file',
            'product_description'=>'min:5',
            'product_category'=>'required|min:2'
        ]);

        $fileName=null;

        //check file exist

        //for image file upload

        if($request->hasFile('product_image'))
        {

            $file=$request->file('product_image');

            //file name generate
            $fileName=date('Ymdhis').'.'.$file->getClientOriginalExtension();

             //file store where i want to
            $file->storeAs('product',$fileName);

        }


        //for image file upload



        Product::create([
            'name'=>$request->product_name,
            'price'=>$request->product_price,
            'description'=>$request->product_description,
            // 'mobile'=>$request->customer_number,
            'image'=>$fileName,
            'category'=>$request->product_category
        ]);


        // dd($request->all());
        notify()->success("Product added successfully");
        return redirect()->route('backend.productlist');
    }


    //for view product

    public function viewProduct($id)
    {
            $viewProduct=Product::find($id);

            return view('backend.pages.view-product',compact('viewProduct'));
    }

    //for delete product

    public function deleteProduct($id)
    {
        $deleteProduct=Product::find($id);
        $deleteProduct->delete();

        notify()->success("Product Deleted successfully");
        return redirect()->back();

    }

    //edit product form er jonno

    public function editProduct($id)
    {
        $product=Product::find($id);
        $allProduct=Product::all();

        return view('backend.pages.edit-product', compact('product','allProduct'));
    }

    //update product er jonno

    public function updateProduct(Request $request, $id)
    {

// dd($request->all());

        $product=Product::find($id);
        $product->update([
            'name'=>$request->product_name,
            'price'=>$request->product_price,
            'description'=>$request->product_description,
        ]);

        notify()->success("Product Updated successfully");
        return redirect()->route('backend.productlist');

    }
}
