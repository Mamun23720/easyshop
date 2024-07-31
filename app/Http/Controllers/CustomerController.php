<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class CustomerController extends Controller
{
    public function list()
    {
        $allCustomer=Customer::paginate(10);

        return view ('backend.customerlist', compact('allCustomer'));
    }

    public function form()
    {
        return view ('backend.customerform');
    }
    public function store(Request $request)
    {
        // dd($request);
        $validation=Validator::make($request->all(),[
            'customer_name'=>'required',
            'customer_email'=>'required',
            'customer_image'=>'required|file',
        ]);

        // $fileNameC=null;

        //check file exist
        if($request->hasFile('customer_image'))
        {

            $file=$request->file('customer_image');

            //file name generate
            $fileName=date('Ymdhis').'.'.$file->getClientOriginalExtension();

             //file store where i want to
            $file->storeAs('customer',$fileName);
        }
        Customer::create([
            'name'=>$request->customer_name,
            'email'=>$request->customer_email,
            // 'date'=>$request->customer_dob,
            // 'mobile'=>$request->customer_number,
            'image'=>$fileName
        ]);
        // dd($fileNames);
        return redirect()->route('backend.customerlist');
    }


}
