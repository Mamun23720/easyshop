<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Registration;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegistrationController extends Controller
{
    public function registration(Request $request){

        // validation



        //for image

        $fileName=null;

        if($request->hasFile('reg_image'))
        {

            $file=$request->file('reg_image');

            //file name generate
            $fileName=date('Ymdhis').'.'.$file->getClientOriginalExtension();

             //file store where i want to
            $file->storeAs('customerRegistration',$fileName);
        }
        //query

        Registration::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'image'=>$fileName
        ]);

        notify()->success('Registration Complete Successfully');
        return redirect()->back();
    }

    public function customerLogin(Request $request){

        //validation



        //condition for login

        $credentials=$request->except('_token');

        $check=auth('customerGuard')->attempt($credentials);

        if($check){
            notify()->success('Login Successfully');

            return redirect()->route('home');
        }else{
            notify()->error('Login Failed');

            return redirect()->route('home');
        }
    }


    public function customerLogout(){

        Auth::guard('customerGuard')->logout();
        session()->forget('basket');
        notify()->success('Logout Successfully');
        return redirect()->route('home');

    }
}
