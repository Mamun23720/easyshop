@extends('frontend.master')

@section('content')
<div class="container">
    <div class="row">
        <!-- User Profile Section -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h4>User Profile</h4>
                </div>
                <div class="card-body">
                    <div class="text-center mb-4">
                        <!-- Display user profile picture -->
                        <img src="{{url('/uploads/customerRegistration/'. auth('customerGuard')->user()->image)}}" alt="Profile Picture" class="img-fluid rounded-circle" style="width: 150px; height: 150px;">
                    </div>
                    <h5 class="text-center">{{auth('customerGuard')->user()->name}}</h5>
                    <p class="text-center">{{auth('customerGuard')->user()->email}}</p>
                    <!-- Add any other profile information here -->
                </div>
            </div>
        </div>

        <!-- User Orders Section -->
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>Order History</h4>
                </div>
                <div class="card-body">

                    @if ($myCart=session()->has('basket'))
                        <table class="table table-bordered">
                            <thead>
                                @foreach ($myCart=session()->get('basket') as $cart)
                                <tr>
                                    <th>Product Image</th>
                                    <th>Product Name</th>
                                    <th>Subtotal</th>
                                    <th>Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                        <td>
                                            <img style=" margin-left: 0.2px; height: 100px; width: 100px; border-radius: 5%;" src="{{url('/uploads/product/'.$cart['product_image'])}}" class="mt-0" alt="..." >
                                        </td>
                                        <td>{{$cart['product_name']}}</td>
                                        <td>{{$cart['subtotal']}}.00</td>
                                        <td>
                                            <a href="" class="btn btn-warning btn-sm">View</a>
                                            <a href="" class="btn btn-info btn-sm">Print</a>
                                            <a href="" class="btn btn-danger btn-sm">Cancel</a>
                                        </td>
                                </tr>
                            @endforeach
                            @else
                            <p class="text-center">You have no orders yet.</p>
                            @endif
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
