@extends('backend.master')

@section('content')
<br>
<table class="table table-dark table-hover">
        <thead style="border: white">
          <tr>
            <th scope="col">Serial</th>
            <th scope="col">Product Name</th>
            <th scope="col" style="text-align: center">Price</th>
            <th scope="col">Description</th>
            <th scope="col">Image</th>
            <th scope="col">Category</th>
            {{-- <th scope="col">Reviews</th> --}}
            <th scope="col" style="text-align: center">Action</th>
          </tr>
        </thead>
        <tbody>

            @foreach ($womensfashionProduct as $key=>$product)


          <tr>
            <th scope="row">{{$key+1}}</th>
            <td>{{$product->name}}</td>
            <td style="text-align: center">{{$product->price}}</td>
            <td>{{$product->description}}</td>
            <td style="text-align: center">
                <img src="{{url('/uploads/product/'. $product->image)}}" width="50px" height="50px">
            </td>
            <td>{{$product->category}}</td>
            {{-- <td>{{$product->reviews}}</td> --}}
            <td style="text-align: center">
                <a class="btn btn-success" href="{{route('backend.viewProduct',$product->id)}}">View</a>
                <a class="btn btn-info" href="{{route('backend.editProduct',$product->id)}}">Edit</a>
                <a class="btn btn-danger" href="{{route('backend.deleteProduct',$product->id)}}">Delete</a>
              </td>
          </tr>

          @endforeach

        </tbody>
  </table>

  {{$allProduct->links()}}


@endsection
