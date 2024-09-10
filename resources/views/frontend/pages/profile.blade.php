@extends('frontend.master2')

@section('content')
    <div class="container">
        <div class="row">
            <!-- User Profile Section -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h2 style="text-align: center;"><b>User Profile</b></h2>
                    </div>
                    <div class="card-body">
                        <div style=" text-align:center" class="text-center mb-4">
                            <!-- Display user profile picture -->
                            <img src="{{ url('/uploads/customerRegistration/' . auth('customerGuard')->user()->image) }}"
                                alt="Profile Picture" class="img-fluid rounded-circle" style="width: 150px; height: 150px;">
                        </div>
                        <h5 class="text-center">{{ auth('customerGuard')->user()->name }}</h5>
                        <p class="text-center">{{ auth('customerGuard')->user()->email }}</p>
                        <!-- Add any other profile information here -->
                    </div>
                </div>
            </div>

            <!-- User Orders Section -->
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4 style="text-align: center;"><b>Order History</b></h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered">
                            <thead>


                                <tr>
                                    <th>Order</th>
                                    <th>Order Date</th>
                                    <th>Receiver Name</th>
                                    <th style="text-align: right;">Subtotal</th>
                                    <th style="text-align: center;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($order as $key => $item)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $item->created_at->format('d-m-Y') }}</td>
                                        <td>{{ $item->receiver_name }}</td>
                                        <td style="text-align: right;">{{ $item->total_amount }}.00</td>
                                        <td style="text-align: center;">
                                            <a href="{{ route('view.invoice', $item->id) }}"
                                                class="btn btn-warning btn-sm">View</a>
                                            <a href="{{ route('delete.single.order', $item->id) }}"
                                                class="btn btn-danger btn-sm">Cancel</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
