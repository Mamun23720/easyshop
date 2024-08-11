@extends('frontend.master')

@section('content')


<div class="container">

<div class="row d-flex" >

<div class="col-md-7 col-lg-8">



<div><h1 class="mb-2" style="font-size: 200%; color:black;"><b>Billing Address</b></h1></div>



        <form action="#" method="post">

          @csrf



          <div class="row g-3">
            <div class="col-12">
              <label for="name" class="form-label"><b>Name</b></label>
              <input type="text" class="form-control" id="name" placeholder="Enter your name" value="" name="receiver_name" required>
            </div>
<!-- 
            <div class="col-sm-6">
              <label for="lastName" class="form-label">Last name</label>
              <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div> -->
<!-- 
            <div class="col-12">
              <label for="username" class="form-label">Username</label>
              <div class="input-group has-validation">
                <span class="input-group-text">@</span>
                <input type="text" class="form-control" id="username" placeholder="Username" required="">
              <div class="invalid-feedback">
                  Your username is required.
                </div>
              </div>
            </div> -->

            <div class="col-12">
              <label for="email" class="form-label"><b>Email Address</b></label>
              <input type="email" name="receiver_email" class="form-control" id="email" placeholder="Enter your email address" required>
            </div>

            <div class="col-12">
              <label for="number" class="form-label"><b>Mobile Number</b></label>
              <input type="number" name="receiver_number" class="form-control" id="number" placeholder="Enter your mobile number" required>
            </div>

            <div class="col-12">
              <label for="email" class="form-label"><b>Delivery Location</b></label>
              <input type="email" name="receiver_location" class="form-control" id="email" placeholder="Enter your delivery location" required>
            </div>

            <!-- <div class="col-12">
              <label for="email" class="form-label">Email Address</label>
              <input type="email" name="receiver_email" class="form-control" id="email" placeholder="Enter your email address">
            </div> -->

            <!-- <div class="col-12">
              <label for="address" class="form-label">Address</label>
              <input type="text" class="form-control" id="address" placeholder="1234 Main St" required="">
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div> -->


            <!-- <div class="col-md-5">
              <label for="country" class="form-label">Country</label>
              <select class="form-select" id="country" required="">
                <option value="">Choose...</option>
                <option>United States</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid country.
              </div>
            </div> -->

            <!-- <div class="col-md-4">
              <label for="state" class="form-label">State</label>
              <select class="form-select" id="state" required="">
                <option value="">Choose...</option>
                <option>California</option>
              </select>
              <div class="invalid-feedback">
                Please provide a valid state.
              </div>
            </div> -->

            <!-- <div class="col-md-3">
              <label for="zip" class="form-label">Zip</label>
              <input type="text" class="form-control" id="zip" placeholder="" required="">
              <div class="invalid-feedback">
                Zip code required.
              </div>
            </div> -->
          </div>

          <!-- <hr class="my-4">

          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="same-address">
            <label class="form-check-label" for="same-address">Shipping address is the same as my billing address</label>
          </div>

          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="save-info">
            <label class="form-check-label" for="save-info">Save this information for next time</label>
          </div>

          <hr class="my-4">

          <h4 class="mb-3">Payment</h4>

          <div class="my-3">
            <div class="form-check">
              <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked="" required="">
              <label class="form-check-label" for="credit">Credit card</label>
            </div>
            <div class="form-check">
              <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required="">
              <label class="form-check-label" for="debit">Debit card</label>
            </div>
            <div class="form-check">
              <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required="">
              <label class="form-check-label" for="paypal">PayPal</label>
            </div>
          </div>

          <div class="row gy-3">
            <div class="col-md-6">
              <label for="cc-name" class="form-label">Name on card</label>
              <input type="text" class="form-control" id="cc-name" placeholder="" required="">
              <small class="text-body-secondary">Full name as displayed on card</small>
              <div class="invalid-feedback">
                Name on card is required
              </div>
            </div>

            <div class="col-md-6">
              <label for="cc-number" class="form-label">Credit card number</label>
              <input type="text" class="form-control" id="cc-number" placeholder="" required="">
              <div class="invalid-feedback">
                Credit card number is required
              </div>
            </div>

            <div class="col-md-3">
              <label for="cc-expiration" class="form-label">Expiration</label>
              <input type="text" class="form-control" id="cc-expiration" placeholder="" required="">
              <div class="invalid-feedback">
                Expiration date required
              </div>
            </div>

            <div class="col-md-3">
              <label for="cc-cvv" class="form-label">CVV</label>
              <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
              <div class="invalid-feedback">
                Security code required
              </div>
            </div>
          </div> -->


          <hr class="my-4">
          <h1 style="color:black; font-size: 300%; text-align: right;" class="mb-3">
          <b  >Total Price= {{array_sum(array_column(session()->get('basket'),'subtotal')) }}.00 Taka
          </h1>
          <a href="{{route('order.place')}}" style="color: black;" class="w-100 btn btn-success btn-lg" type="submit"><b>Continue to checkout</b></a>
        </form>
      </div>
  </div>
</div>

<br><br><br><br><br>

@endsection