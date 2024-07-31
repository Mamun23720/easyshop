<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SignupController extends Controller
{
    public function store(Request $request)
    {
        //Validation
        $validation=Validator::make($request->all(),[
            'name'=>'required',
            'email'=>'required|email',
            'image'=>'required|file',
            'password'=>'required'
        ]);

//image file
$fileName=null;
        if($request->hasFile('image'))
        {

            $file=$request->file('image');

            //file name generate
            $fileName=date('Ymdhis').'.'.$file->getClientOriginalExtension();

            //file store where i want to
            $file->storeAs('users',$fileName);

        }


        //Query

        User::created([
            'name'=>$request->name,
            'email'=>$request->email,
            'image'=>$fileName,
            'password'=>$request->password,
        ]);
        
        return redirect()->back();


    }
}
