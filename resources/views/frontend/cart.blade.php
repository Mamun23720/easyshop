@extends('frontend.master')

@section('content')

<div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <form class="col-md-12">
            <div class="site-blocks-table">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th class="product_image">Image</th>
                    <th class="product_name">Product Name</th>
                    <th class="product_price" style="text-align: center;" >Price</th>
                    <th class="product_quantity" style="text-align: center;" >Quantity</th>
                    <th class="product_total" style="text-align: center;" >Total</th>
                    <th class="product_price" style="text-align: center;" >Remove</th>
                  </tr>
                </thead>
                <tbody>

                  @php $total = 0; @endphp

                  @if (session('basket'))
                    
                  @foreach (session('basket') as $product)

                  <tr>
                    <td class="product_name">
                      <h2 class="h5 text-black">Uploading image...</h2>
                    </td>
                    <td>{{$product['product_name']}}</td>
                    <td style="text-align: center;" >{{$product['product_price']}}</td>
                    <td style="text-align: center;" >Updating Quantity</td>
                    <td style="text-align: center;" >Updating Total</td>
                    <td style="text-align: center;" ><a href="#" class="btn btn-primary btn-sm">X</a></td>
                  </tr>



                  @endforeach

                  @endif



                </tbody>
              </table>
            </div>
          </form>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="row mb-5">
              <div class="col-md-6 mb-3 mb-md-0">
                <button class="btn btn-primary btn-sm btn-block">Update Cart</button>
              </div>
              <div class="col-md-6">
                <button class="btn btn-outline-primary btn-sm btn-block">Continue Shopping</button>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <label class="text-black h4" for="coupon">Coupon</label>
                <p>Enter your coupon code if you have one.</p>
              </div>
              <div class="col-md-8 mb-3 mb-md-0">
                <input type="text" class="form-control py-3" id="coupon" placeholder="Coupon Code">
              </div>
              <div class="col-md-4">
                <button class="btn btn-primary btn-sm">Apply Coupon</button>
              </div>
            </div>
          </div>
          <div class="col-md-6 pl-5">
            <div class="row justify-content-end">
              <div class="col-md-7">
                <div class="row">
                  <div class="col-md-12 text-right border-bottom mb-5">
                    <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-6">
                    <span class="text-black">Subtotal</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black">$230.00</strong>
                  </div>
                </div>
                <div class="row mb-5">
                  <div class="col-md-6">
                    <span class="text-black">Total</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black">$230.00</strong>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <button class="btn btn-primary btn-lg py-3 btn-block" onclick="window.location='checkout.html'">Proceed To Checkout</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



@endsection