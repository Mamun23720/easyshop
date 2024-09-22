<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    
    public function financialReport()
    {
        return view('backend.pages.financialReport');
    }
    
    public function financialPayout()
    {
        return view('backend.pages.financialPayout');
    }
    
    public function financialTax()
    {
        return view('backend.pages.financialTax');
    }
    
    public function financialCoupon()
    {
        return view('backend.pages.financialCoupon');
    }
    
}
