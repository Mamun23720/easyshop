@extends('backend.master')

@section('content')
    <br>
    <br>
    <h1 style="text-align: center; font-family:'Times New Roman', Times, serif"> This is my Customer Lists </h1>
    <br>



    <table class="table table-dark table-hover">
        <thead>
            <tr style="text-align: center; font-family:'Times New Roman', Times, serif" >
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Mobile</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($allCustomer as $key => $customer)
                <tr style="text-align: center; font-family:'Times New Roman', Times, serif" >
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ $customer->name }}</td>
                    <td>+88 {{$customer->phone}}</td>

                    <!-- <td>
                        <img src="{{ url('/uploads/customerRegistration/' . $customer->image) }}" width="50px" height="50px">
                    </td> -->

                    <td>
                        <a class="btn btn-success" href="{{ route('backend.viewCustomer', $customer->id) }}">View</a>
                        <!-- <a class="btn btn-info" href="">Edit</a> -->
                        <a class="btn btn-danger" href="{{ route('backend.deleteCustomer', $customer->id) }}">Remove</a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>

    {{ $allCustomer->links() }}
@endsection
