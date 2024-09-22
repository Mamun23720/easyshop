@extends('backend.master')

@section('content')


<div class="container mt-5" >

    <div class="row" >

        <div class="col-md-6">
            <img style="height: 500px; margin-left: 9%;  border: 15px solid black; border-radius: 50%;" src="{{ url('/uploads/customerRegistration/' . $customer->image) }}" alt="{{$customer->name}}">
            <br>
        </div>


        <div class="col-md-6">
            
            <table  style=" border: solid black;" class="table">
                <thead>

                        <tr>
                            <th style="width: 40%; font-family: 'Times New Roman', Times, serif; font-size: 18px; border: solid black;" scope="col">User Name</th>
                            <th scope="col">{{$customer->username}}</th>
                        </tr>

                        <tr>
                            <th style="width: 40%; font-family: 'Times New Roman', Times, serif; font-size: 18px; border: solid black;" scope="col">Full Name</th>
                            <th scope="col">{{$customer->name}}</th>
                        </tr>

                        <tr>
                            <th style="width: 40%; font-family: 'Times New Roman', Times, serif; font-size: 18px; border: solid black;" scope="col">Email Address</th>
                            <th scope="col"><a href="https://mail.google.com/mail">{{$customer->email}}</a></th>
                        </tr>

                        <tr>
                            <th style="width: 40%; font-family: 'Times New Roman', Times, serif; font-size: 18px; border: solid black;" scope="col">Phone Number</th>
                            <th scope="col">{{$customer->phone}}</th>
                        </tr>

                        <tr>
                            <th style="width: 40%; font-family: 'Times New Roman', Times, serif; font-size: 18px; border: solid black;" scope="col">Date of Birth</th>
                            <th scope="col">{{ \Carbon\Carbon::parse($customer->dob)->format('d-m-Y') }}</th>
                        </tr>

                        <tr>
                            <th style="width: 40%; font-family: 'Times New Roman', Times, serif; font-size: 18px; border: solid black;" scope="col">Street Address</th>
                            <th scope="col">{{$customer->address}}</th>
                        </tr>

                        <tr>
                            <th style="width: 40%; font-family: 'Times New Roman', Times, serif; font-size: 18px; border: solid black;" scope="col">Zip/Postal Code</th>
                            <th scope="col">{{$customer->zip}}</th>
                        </tr>

                        <tr>
                            <th style="width: 40%; font-family: 'Times New Roman', Times, serif; font-size: 18px; border: solid black;" scope="col">City</th>
                            <th scope="col">{{$customer->city}}</th>
                        </tr>

                        <tr>
                            <th style="width: 40%; font-family: 'Times New Roman', Times, serif; font-size: 18px; border: solid black;" scope="col">Country</th>
                            <th scope="col">{{$customer->country}}</th>
                        </tr>

                        <tr>
                            <th style="width: 40%; font-family: 'Times New Roman', Times, serif; font-size: 18px; border: solid black;" scope="col">Registration Date</th>
                            <th scope="col">{{ $customer->created_at->format('d-m-Y') }}</th>
                        </tr>
                </thead>
            </table>
        </div>



    </div>

    
    
</div>


@endsection