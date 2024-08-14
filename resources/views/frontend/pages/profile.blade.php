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
                        <p class="text-center">You have no orders yet.</p>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Order ID</th>
                                    <th>Date</th>
                                    <th>Total</th>
                                    <th>Status</th>
                                    <th>Details</th>
                                </tr>
                            </thead>
                            <tbody>

                                    <tr>
                                        <td>1</td>
                                        <td>01-02-2024</td>
                                        <td>200</td>
                                        <td>pending</td>
                                        <td>
                                            <a href="" class="btn btn-info btn-sm">View</a>
                                        </td>
                                    </tr>
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
