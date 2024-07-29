<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class ProductController extends Controller
{
    public function list()
    {
        $allProduct=Product::paginate(10);

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
        ]);

        // $fileName=null;

        //check file exist
        if($request->hasFile('product_image'))
        {

            $file=$request->file('product_image');

            //file name generate
            $fileName=date('Ymdhis').'.'.$file->getClientOriginalExtension();

             //file store where i want to
            $file->storeAs('product',$fileName);

        }

        Product::create([
            'name'=>$request->product_name,
            'price'=>$request->product_price,
            // 'date'=>$request->customer_dob,
            // 'mobile'=>$request->customer_number,
            'image'=>$fileName
        ]);


        // dd($request->all());

        return redirect()->route('backend.productlist');
    }
}
