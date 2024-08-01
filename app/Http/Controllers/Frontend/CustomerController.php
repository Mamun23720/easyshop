<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function customer()
    {
        $allCustomer = Customer::all();

        $title = "Customer Lists";

        return view("frontend.customer",compact('allCustomer','title'));
    }
}
