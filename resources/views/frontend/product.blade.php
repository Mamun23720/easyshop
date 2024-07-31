@extends('frontend.master')

@section('content')

<div style="text-align: center">
<h1 class="btn btn-success btn-lg">Product List's</h1>
</div>
<br>
<br>
<div class="container">
<div class="row">
<div class="row row-cols-1 row-cols-lg-5">



    {{-- <div class="col d-flex flex-column align-items-start gap-2">
        <h2 class="fw-bold text-body-emphasis">Left-aligned title explaining these awesome features</h2>
        <p class="text-body-secondary">Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
        <a href="#" class="btn btn-primary btn-lg">Primary button</a>
      </div> --}}

    @foreach ($allProduct as $product)
    <div class="">
        <div class="">
            <a href="{{route('show.product', $product->id)}}" class="align-items-center text-white text-decoration-none">
        <img src="{{url('/uploads/product/'.$product->image)}}" class="" alt="..." style="border-radius: 5%" style="height: 500px; width: 350px">
          <h5 class="name" style="text-align: center">{{$product->name}}</h5>
          <p class="text" style="text-align: center">{{$product->price}} BDT</p>
          {{-- <a href="#" class="btn btn-primary">Buy</a>
          <a href="#" class="btn btn-primary">Buy</a> --}}
        </div>
            </a>
      </div>
  @endforeach



    </div>
</div>
</div>
<br>
<br>
@endsection
