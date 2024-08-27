@extends('frontend.master2')

@section('content')





    <div class="container">
        <h1>All Products</h1>
        <div class="product-grid">
            @foreach($allProduct as $product)
                <div class="product-card ">
                    <img src="{{url('/uploads/product/'.$product->image)}}" alt="{{$product->name}}">
                    <div class="details">
                        <h2>{{$product->name}}</h2>
                        <p>{{ $product->description }}</p>
                        <p class="price">{{ number_format($product->price, 2) }}BDT</p>
                        <a href="{{ route('show.product', $product->id) }}" class="btn">View Details</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
