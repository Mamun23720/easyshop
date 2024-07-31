@extends('frontend.master')

@section('content')


<h1 style="text-align: center">{{$title}}</h1>
<div class="container">
<div class="row">
<div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4">



    {{-- <div class="col d-flex flex-column align-items-start gap-2">
        <h2 class="fw-bold text-body-emphasis">Left-aligned title explaining these awesome features</h2>
        <p class="text-body-secondary">Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
        <a href="#" class="btn btn-primary btn-lg">Primary button</a>
      </div> --}}

    @foreach ($allCustomer as $customer)
    <div class="row-cols-1 row-cols-sm-2 g-4">
        <img src="{{url('/uploads/customer/'.$customer->image)}}" class="card-img-top" alt="..." style="height: 300px; width: 300px">
        <div class="card-body">
          <h5 class="card-title">{{$customer->name}}</h5>
          <p class="card-text">{{$customer->email}}</p>
          <a href="#" class="btn btn-primary">Poke</a>
        </div>
      </div>
  @endforeach
    </div>
</div>
</div>
<br>
<br>
@endsection
