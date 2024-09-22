<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BusinessSettingController extends Controller
{
    
    public function bSettingWebsite()

    {
        return view('backend.pages.bSettingWebsite');
    }

    public function bSettingPayment()

    {
        return view('backend.pages.bSettingPayment');
    }

    public function bSettingCurrency()

    {
        return view('backend.pages.bSettingCurrency');
    }

    public function bSettingLanguage()

    {
        return view('backend.pages.bSettingLanguage');
    }

    public function bSettingBlog()

    {
        return view('backend.pages.bSettingBlog');
    }

    public function bSettingFAQ()

    {
        return view('backend.pages.bSettingFAQ');
    }

}
