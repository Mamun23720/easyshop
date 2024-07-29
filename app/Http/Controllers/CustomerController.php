<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Http\Request;

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
        Customer::create([
            'name'=>$request->customer_name,
            'email'=>$request->customer_email,
            // 'date'=>$request->customer_dob,
            // 'mobile'=>$request->customer_number,
            // 'image'=>$request->customer_image
        ]);
        return redirect()->route('backend.customerlist');
    }


}
