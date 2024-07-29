@extends('frontend.master')

@section('content')


<h1 style="text-align: center">{{$title}}</h1>
<br>
<br>
<div class="container">
<div class="row">
<div class="row row-cols-1 row-cols-lg-3 align-items-stretch">
    @foreach ($allProduct as $product)
    <div class="card" style="width: 18rem;">
        <img src="{{url('/uploads/product/'.$product->image)}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Name- {{$product->name}}</h5>
          <p class="card-text">Price- {{$product->price}}</p>
          <a href="#" class="btn btn-primary">Buy</a>
        </div>
      </div>

  @endforeach
    </div>
</div>
</div>
<br>
<br>
@endsection
