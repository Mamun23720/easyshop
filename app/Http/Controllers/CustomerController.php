<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class CustomerController extends Controller
{

    public function list()
    {

        $allCustomer = Customer::paginate(10);

        return view('backend.customerlist', compact('allCustomer'));
    }

    public function userRegistration()
    {

        return view('frontend.registration');
    }

    public function registration(Request $request)
    {

        // validation

        //for image

        $fileName = null;

        if ($request->hasFile('reg_image')) {

            $file = $request->file('reg_image');

            //file name generate
            $fileName = date('Ymdhis') . '.' . $file->getClientOriginalExtension();

            //file store where i want to
            $file->storeAs('customerRegistration', $fileName);
        }
        //query

        Customer::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'image' => $fileName
        ]);

        notify()->success('Registration Complete Successfully');

        return redirect()->route('home');
    }



    public function store(Request $request)
    {
        // dd($request);
        $validation = Validator::make($request->all(), [
            'customer_name' => 'required',
            'customer_email' => 'required',
            'customer_image' => 'required|file',
        ]);

        // $fileNameC=null;

        //check file exist
        if ($request->hasFile('customer_image')) {

            $file = $request->file('customer_image');

            //file name generate
            $fileName = date('Ymdhis') . '.' . $file->getClientOriginalExtension();

            //file store where i want to
            $file->storeAs('customer', $fileName);
        }
        Customer::create([
            'name' => $request->customer_name,
            'email' => $request->customer_email,
            // 'date'=>$request->customer_dob,
            // 'mobile'=>$request->customer_number,
            'image' => $fileName
        ]);
        // dd($fileNames);
        return redirect()->back();
    }

    public function userLogin()
    {
        return view('frontend.login');
    }

    public function customerLogin(Request $request)
    {

        //validation



        //condition for login

        $credentials = $request->except('_token');

        $check = auth('customerGuard')->attempt($credentials);

        if ($check) {
            notify()->success('Login Successfully');

            return redirect()->route('home');
        } else {
            notify()->error('Login Failed');

            return redirect()->route('home');
        }
    }

    public function customerLogout()
    {

        Auth::guard('customerGuard')->logout();
        session()->forget('basket');
        notify()->success('Logout Successfully');
        return redirect()->route('home');
    }

    public function profile()
    {
        $order = Order::where('customer_id', auth('customerGuard')->user()->id)->get();

        //    dd($order);
        return view('frontend.pages.profile', compact('order'));
    }

    public function deleteSingleOrder($id)
    {
        $deleteOrder = Order::find($id);
        $deleteOrder->delete();

        notify()->success("Order Deleted successfully");
        return redirect()->back();
    }
}
