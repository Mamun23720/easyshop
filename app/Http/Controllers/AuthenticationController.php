<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{
    public function loginForm()
    {
        return view('backend.login');
    }

    public function doLogin(Request $request)
    {
        $credentials = $request->except("_token");

        $check = Auth::attempt($credentials);

        // dd($request->all());

        if ($check) {

            notify()->success("Login Successfull");

            return redirect()->route('backend.dashboard');
        } else {

            //2 number user
            return redirect()->back();
        }
    }


    public function logout()
    {
        Auth::logout();

        notify()->success("Logout Successfull");

        return redirect()->route('login');
    }
}
