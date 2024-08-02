@extends('frontend.master')

@section('content')

<div class="container">
    <div class="row">
    <div class="row row-cols-1 row-cols-lg-5 align-items-stretch g-4">



        {{-- <div class="col d-flex flex-column align-items-start gap-2">
            <h2 class="fw-bold text-body-emphasis">Left-aligned title explaining these awesome features</h2>
            <p class="text-body-secondary">Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
            <a href="#" class="btn btn-primary btn-lg">Primary button</a>
          </div> --}}

        @foreach ($allProduct as $product)
        <div style="text-align: center;" >
            <div>
              <a href="{{route('show.product', $product->id)}}" class="align-items-center text-white text-decoration-none">
                <img style="height: 200px; width: 200px; border-radius: 20%; " src="{{url('/uploads/product/'.$product->image)}}" class="mt-2" alt="..." >
                <h5>{{$product->name}}</h5>
                <h3>{{$product->price}} BDT</h3>
                <a href="{{route('add.to.cart',$product->id)}}" style="width:150px;height:50px; background-color:red; border-radius: 15%;" class="btn btn-primary shadow-0"><b>Add to cart</b></a>
              </a>
            </div>   
        </div>
      @endforeach



        </div>
    </div>
    </div>
    <br>
    <br>
@endsection
