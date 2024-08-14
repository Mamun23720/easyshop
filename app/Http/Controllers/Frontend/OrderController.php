<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    //Method for Buy now pages

    public function buynow($pId)
    {
        $product = Product::find($pId);

        return view('frontend.pages.checkout', compact('product'));

    }


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

        notify()->success('Product Added Successfully.');

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

                        notify()->success('Product Added Successfully.');

                        return redirect()->back();
                    }
            }
    }

    //remove all cart product method
    public function removeAllCart()
    {
        session()->forget('basket');

        notify()->success('Clear Cart Successful');

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

    public function checkout()
    {
        return view('frontend.pages.checkout');
    }

    public function placeOrder(Request $request)
    {
        //  dd($request->all());
        //validation

        $myCart=session()->get('basket');

         //quary for store data into Orders table
       $order= Order::create([
            'receiver_name'=>$request->receiver_name,
            'receiver_email'=>$request->receiver_email,
            'receiver_address'=>$request->receiver_location,
            'receiver_mobile'=>$request->receiver_number,
            'payment_method'=>$request->payment_method,
            'customer_id'=>auth('customerGuard')->user()->id,
            'total_amount'=>array_sum(array_column($myCart,'subtotal'))

         ]);

         foreach($myCart as $singleData)
        {

            OrderDetail::create([
                'order_id'=>$order->id,
                'product_id'=>$singleData['product_id'],
                'product_unit_price'=>$singleData['product_price'],
                'product_quantity'=>$singleData['quantity'],
                'subtotal'=>$singleData['subtotal'],
            ]);
        }

        //  dd($request->all());

        notify()->success('Order place successfully.');
        session()->forget('basket');
        return redirect()->route('view.invoice',$order->id);

    }

    public function viewInvoice($pId)
    {
        //dd($pId);

        $order=Order::with('orderDetails')->find($pId);

       // dd($orderDetails);

        return view('frontend.pages.invoice', compact('order'));
    }
}
