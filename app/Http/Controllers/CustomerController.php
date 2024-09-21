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

        $validation = Validator::make($request->all(), [
            'name' => 'required | min:5',
            'email' => 'required',
            'phone' => 'required|min:11|max: 11',
            'password' => 'required',
            'address' => 'required',
            'city' => 'required',
            'zip' => 'required',
            'country' => 'required',
            'image' => 'required|file',

        ]);

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
            'phone' => $request->phone,
            'address' => $request->address,
            'city' => $request->city,
            'zip' => $request->zip,
            'country' => $request->country,
            'password' => bcrypt($request->password),
            'image' => $fileName
        ]);

        notify()->success('Registration Complete Successfully');

        return redirect()->route('home');
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
