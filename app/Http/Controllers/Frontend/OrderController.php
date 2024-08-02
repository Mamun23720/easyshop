<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    //Method for Cart Item Pages
    public function cartItem()
    {
        return view('frontend.cart');
    }

    public function addToCart($id)
    {
        //akta variable diye model er maddhome sob prdouct k call korchi

        $product = Product::find($id);

        //akta juri nilam basket name a 

        $myCart=session()->get('basket');

        // dd($myCart);

       // step:1-> cart empty

       if(empty($myCart)) 
       
       {
        // step:1-> cart empty (add to cart)

        //arrayname[key=>value]

        $cart[$product->id]=[
            //     'key'=>value
            'product_id'=>$product->id,
            'product_name'=>$product->name,
            'product_price'=>$product->price,
            'product_quantity'=>1,
            'subtotal'=>1 * $product->price
        ];
        // dd($cart);

        //jodi product ta thake session a rakhte hobe put kore... noile save hobe na...

        session()->put('basket',$cart);

        //step:1 -> complete return back

        notify()->success('Product Added to Cart');
        return redirect()->back();
       }
       
       // step:2 & 3 with a similar else

            else
            {
                
                //jodi cart empty na thake ba cart a oi product already thake tahole->

                //step:2 -> cart not empty but product exists->(Quantity and Price Update Hobe)

                if(array_key_exists($id,$myCart))
                {
                    dd('Product already exists update price and quantity');
                }

                //cart not empty product exists (but different product want to add cart) then ->

                //step:3 -> again add to cart

                    else
                    {
                        $myCart[$product->id]=[
                            //     'key'=>value
                            'product_id'=>$product->id,
                            'product_name'=>$product->name,
                            'product_price'=>$product->price,
                            'product_quantity'=>1,
                            'subtotal'=>1 * $product->price
                        ];

                        //again product gula session a rakha holo then update hobe just
                       
                        // session()->forget('basket');
                        session()->put('basket',$myCart);
                        notify()->success('Product Added to Cart');
                        return redirect()->back();
                    }

            }

    }

}
