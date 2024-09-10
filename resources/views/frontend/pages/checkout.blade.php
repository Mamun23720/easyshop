@extends('frontend.master2')

@section('content')
    <div class="container">

        <div class="row d-flex">

            <div class="col-md-7 col-lg-8">



                <div>
                    <h1 class="mb-2" style="font-size: 200%; color:black;"><b>Billing Address</b></h1>
                </div>



                <form action="{{ route('order.place') }}" method="post">

                    @csrf



                    <div class="row g-3">
                        <div class="col-12">
                            <label for="name" class="form-label"><b>Name</b></label>
                            <input type="text" class="form-control" id="name" placeholder="Enter your name"
                                value="" name="receiver_name" required>
                        </div>


                        <div class="col-12">
                            <label for="email" class="form-label"><b>Email Address</b></label>
                            <input type="email" name="receiver_email" class="form-control" id="email"
                                placeholder="Enter your email address" required>
                        </div>

                        <div class="col-12">
                            <label for="number" class="form-label"><b>Mobile Number</b></label>
                            <input type="number" name="receiver_number" class="form-control" id="number"
                                placeholder="Enter your mobile number" required>
                        </div>

                        <div class="col-12">
                            <label for="text" class="form-label"><b>Delivery Location</b></label>
                            <input type="text" name="receiver_location" class="form-control" id="email"
                                placeholder="Enter your delivery location" required>
                        </div>

                        <div class="col-12">
                            <label for="text" class="form-label"><b>Payment Method</b></label>

                            <input type="text" name="payment_method" class="form-control" id="text"
                                placeholder="Enter your payment method COD / Online">
                        </div>




                        <hr class="my-4">
                        <h1 style="color:black; font-size: 200%;" class="mb-3">
                            <b>Total Price=
                                @if (session()->get('basket'))
                                    {{ array_sum(array_column(session()->get('basket'), 'subtotal')) }}.00 Taka
                                @else
                                    00.00 Taka
                                @endif

                        </h1>
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<button style="color: black;"
                            class="w-100 btn btn-success btn-lg mt-2 ml-5" type="submit"><b>Continue to
                                checkout</b></button>
                </form>
            </div>
        </div>
    </div>

    <br><br><br><br><br>
@endsection
