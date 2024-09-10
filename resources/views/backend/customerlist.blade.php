@extends('backend.master')

@section('content')
    <br>
    <br>
    <h1 style="text-align: center"> This is my Customer Lists </h1>
    <br>







    <table class="table table-dark table-hover">
        <thead>
            <tr>
                <th scope="col">Serial</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                {{-- <th scope="col">Date of Birth</th>
            <th scope="col">Mobile</th> --}}
                <th scope="col">Image</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($allCustomer as $customer)
                <tr>
                    <th scope="row">{{ $customer->id }}</th>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->email }}</td>
                    {{-- <td>{{$customer->dateofbirth}}</td> --}}
                    {{-- <td>{{$customer->mobile}}</td> --}}
                    <td>
                        <img src="{{ url('/uploads/customerRegistration/' . $customer->image) }}" width="50px" height="50px">
                    </td>
                    <td>
                        <a class="btn btn-success" href="">View</a>
                        <a class="btn btn-info" href="">Edit</a>
                        <a class="btn btn-danger" href="">Delete</a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>

    {{ $allCustomer->links() }}
@endsection
