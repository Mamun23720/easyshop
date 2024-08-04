@extends('frontend.master')

@section('content')


<div class="container">

<div class="row d-flex" >

<table class="table mb-0" >
  <thead>
    <tr>
    <th style="font-size: 200%; text-align: center; border-color: black; border-width: 4px; background-color:burlywood;" scope="col-1">Serial</th>
      <th style="font-size: 200%; text-align: center; border-color: black; border-width: 4px; background-color:burlywood;" scope="col-1">Image</th>
      <th style="font-size: 200%; border-color: black; border-width: 4px; background-color:burlywood;" scope="col-1">ProductName</th>
      <th style="font-size: 200%; text-align: center; border-color: black; border-width: 4px; background-color:burlywood;" scope="col-1">Price</th>
      <th style="font-size: 200%; text-align: center; border-color: black; border-width: 4px; background-color:burlywood;" scope="col-1">Quantity</th>
      <th style="font-size: 200%; text-align: center; border-color: black; border-width: 4px; background-color:burlywood;" scope="col-1">Action</th>
      <th style="font-size: 200%; text-align: right; border-color: black; border-width: 4px; background-color:burlywood;" scope="col-1">Subtotal</th>
    </tr>
  </thead>
  <br><br><br><br><br><br><br><br><br><br><br><br>
      <tbody >

@if ($myCart=session()->get('basket'))

        @foreach ($myCart as $cart)

          <tr>
          <td style="text-align:center; font-size: 200%; border-color: black; border-width: 4px; background-color:burlywood;" class="col-1">...</td>
            <td style=" border-color: black; border-width: 4px; background-color:burlywood;" class="col-1 mt-0">
            <img style=" margin-left: 0.2px; height: 150px; width: 150px; border-radius: 5%;" src="{{url('/uploads/product/'.$cart['product_image'])}}" class="mt-0" alt="..." >
            </td>  
            <td style=" font-size: 200%; border-color: black; border-width: 4px; background-color:burlywood;" class="col-1">{{$cart['product_name']}}</td>
            <td style="font-size: 200%; text-align: center; border-color: black; border-width: 4px; background-color:burlywood;" class="col-1" >{{$cart['product_price']}}</td>
            <td style="font-size: 200%; text-align: center; border-color: black; border-width: 4px; background-color:burlywood;" class="col-1" >{{$cart['quantity']}}</td>

            <td  style="font-size: 200%; text-align: center; border-color: black; border-width: 4px; background-color:burlywood;" class="col-1" >
            <a href="{{route('remove.single.cart',$cart['product_id'])}}" class="btn btn-danger mt-5"><b>Remove</b></a>
            </td>
            <td style="font-size: 200%; text-align: right; border-color: black; border-width: 4px; background-color:burlywood;" class="col-1" ><b>{{$cart['subtotal']}}.00</b></td>

          </tr>

        @endforeach

@else



@endif
</tbody>
</table>


@if ($myCart=session()->get('basket'))
  
        <h1 style="color:red; font-size: 300%; text-align: right; background-color:burlywood; border-color: black; border-width: 4px;">
            <b  >Total Price= {{array_sum(array_column(session()->get('basket'),'subtotal')) }}.00
            <a style="margin-left: 1140px; " class="btn btn-danger mt-0 mb-3" href="{{route('remove.all.cart')}}" class="nav-link">
            Remove All Item
            </a>
            </b>
        </h1><br><br><br>

@else
<br><br><br>
        <h1 style="color:black; font-size: 300%; text-align: center; ">
            <b>Your Cart is empty right now!
            </b>
        </h1>

@endif
        


</div>


</div>
<br>
<br>
<br>
<br><br><br><br><br><br>
@endsection