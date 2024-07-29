@extends('backend.master')

@section('content')


<h1 style="text-align: center"> This is Product Lists </h1>

<div style="text-align: center">
<button type="button" class="btn btn-primary">
    <a href="{{route('backend.productform')}}" style="color: blanchedalmond">Add Product</a>
</button>
<br>
<br>
</div>

<table class="table table-dark table-hover">
        <thead>
          <tr>
            <th scope="col">Serial</th>
            <th scope="col">Product Name</th>
            <th scope="col">Price</th>
            {{-- <th scope="col">Date of Birth</th>
            <th scope="col">Mobile</th> --}}
            <th scope="col">Image</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>

            @foreach ($allProduct as $product)


          <tr>
            <th scope="row">{{$product->id}}</th>
            <td>{{$product->name}}</td>
            <td>{{$product->price}}</td>
            {{-- <td>{{$customer->dateofbirth}}</td> --}}
            {{-- <td>{{$customer->mobile}}</td> --}}
            <td>
                <img src="{{url('/uploads/product/'.$product->image)}}" width="50px" height="50px">
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

  {{$allProduct->links()}}


@endsection
