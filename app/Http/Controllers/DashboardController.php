<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {

        $allProduct=Product::all();

        return view ('backend.dashboard', compact('allProduct'));

    }
    public function bannerlist()
    {

        $allBanner=Banner::paginate(20);

        return view('backend.bannerlist', compact('allBanner'));

    }

    public function bannerform()
    {

        return view('backend.bannerform');

    }

    public function bannerstore(Request $request)

    {

        $fileName=null;

        if($request->hasFile('banner_image'))

        {
            $file=$request->file('banner_image');
            $fileName=date('Ymdhis').'.'.$file->getClientOriginalExtension();
            $file->storeAs('banner',$fileName);
        }

        Banner::create([

            'banner_name'=>$request->banner_name,
            'banner_description'=>$request->banner_description,
            'banner_image'=>$fileName,

        ]);

        notify()->success("Banner added successfully");

        return redirect()->route('backend.bannerlist');

    }

    public function deletebanner($id)

    {

        $deleteBanner=Banner::find($id);

        $deleteBanner->delete();

        notify()->success("Banner Deleted successfully");

        return redirect()->back();

    }
    
}
