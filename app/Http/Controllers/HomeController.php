<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function newSellerRequest()
    {
        return view('backend.pages.newSellerRequest');
    }

    public function sellerList()
    {
        return view('backend.pages.sellerList');
    }

    public function sellerCommissionSetting()
    {
        return view('backend.pages.sellerCommissionSetting');
    }
    
    public function sellerSubscription()
    {
        return view('backend.pages.sellerSubscription');
    }
    
    public function sellerPayout()
    {
        return view('backend.pages.sellerPayout');
    }
    
    public function deliveryProvider()
    {
        return view('backend.pages.deliveryProvider');
    }
    
    public function deliveryTracking()
    {
        return view('backend.pages.deliveryTracking');
    }
}
