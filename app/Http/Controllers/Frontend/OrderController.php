<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    //Method for Cart Item Pages
    public function viewCart()
    {
        $myCart=session()->get('basket');

        // session()->forget('basket');

        return view('frontend.pages.view-cart', compact('myCart'));
    }

    public function addToCart($pId)
    {
        $product = Product::find($pId);
        $myCart=session()->get('basket');
        // session()->forget('basket');

       if(empty($myCart)) 
       {
        $cart[$product->id]=[
            'product_id'=>$product->id,
            'product_image'=>$product->image,
            'product_name'=>$product->name,
            'product_price'=>$product->price,
            'quantity'=>1,
            'subtotal'=>1 * $product->price,
        ];
        session()->put('basket',$cart);

        notify()->success('Product Added.');

        return redirect()->back();
       }
       else{
                if(array_key_exists($pId,$myCart))
                {
                    $myCart[$pId]['quantity'] = $myCart[$pId]['quantity'] + 1;

                    $myCart[$pId]['subtotal'] = $myCart[$pId]['quantity'] * $myCart[$pId]['product_price'];
                    
                    session()->put('basket',$myCart);

                    //session()->forget('basket');

                    notify()->success('Product Added Again.');

                    return redirect()->back();
                }
                else{
                        $myCart[$product->id]=[
                            'product_id'=>$product->id,
                            'product_image'=>$product->image,
                            'product_name'=>$product->name,
                            'product_price'=>$product->price,
                            'quantity'=>1,
                            'subtotal'=>1 * $product->price,
                        ];
                        session()->put('basket',$myCart);
          
                        notify()->success('Product Added.');

                        return redirect()->back();
                    }
            }
    }

    //remove all cart product method
    public function removeAllCart()
    {
        session()->forget('basket');

        notify()->success('Clear Cut Successful');
        
        return view('frontend.pages.view-cart');
    }

    //remove single cart product method

    public function removeSingleCart($pId)
    {
        // dd($pId);


        $myCart=session()->get('basket');

        unset($myCart[$pId]);

        session()->put('basket',$myCart);

        // dd($sajib);

        // session()->forget('pId');

        notify()->success('Product Removed Successfully');

        return redirect()->back();
    }
}