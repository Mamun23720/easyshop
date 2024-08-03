@extends('frontend.master')

@section('content')


<div class="container">

<div class="row d-flex" >

<table class="table">
  <thead>
    <tr>
      <th style="text-align: center;" scope="col-1">Image</th>
      <th scope="col-1">Name</th>
      <th style="text-align: center;" scope="col-1">Price</th>
      <th style="text-align: center;" scope="col-1">Quantity</th>
      <th style="text-align: center;" scope="col-1">Total</th>
    </tr>
  </thead>
  <tbody>

  @foreach ($myCart as $cart)
    <tr>
      <td class="col-1">
      <img style="height: 100px; width: 100px; border-radius: 5%" src="{{url('/uploads/product/'.$cart['product_image'])}}" class="mt-2" alt="..." >
      </td>  
      <td class="col-1">{{$cart['product_name']}}</td>
      <td class="col-1" style="text-align: center;" >{{$cart['product_price']}}</td>
      <td class="col-1" style="text-align: center;" >{{$cart['quantity']}}</td>
      <td class="col-1" style="text-align: center;" >{{$cart['subtotal']}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
                
</div>

</div>
@endsection