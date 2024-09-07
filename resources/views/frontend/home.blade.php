@extends('frontend.master2')

@section('content')

<div class="slider-container">
    <div class="slider">
        @foreach($allBanner as $index => $banner)
        <div class="slide {{ $loop->first ? 'active' : '' }}">
            <img src="{{ url('/uploads/banner/' . $banner->banner_image) }}" alt="Banner {{ $index + 1 }}">
            <div class="slider-content">
                <h1 style="color: white">{{ $banner->banner_name }}</h1>
                <h5 style="color: white">{{ $banner->banner_description }}</h5>
                <a class="btn btn-info btn-lg mt-5" href="{{ route('frontend.product') }}">
                    <b style="color: white;">Shop Now</b>
                </a>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Navigation Dots -->
    <div class="dots">
        @foreach($allBanner as $index => $banner)
        <span class="dot {{ $loop->first ? 'active' : '' }}" onclick="currentSlide($index + 1)"></span>
        @endforeach
    </div>
</div>

<br><br>
<div class="container-fluid mt-5">
    <div class="row">

        @foreach ($allCategory as $category)

        <div class="col">
            <a href="#">
                <div style="background: #4160ff; height: 300px; width: 200px;" class="category-box d-flex align-items-center justify-content-center">
                    <img class="category-image" style="height: 295px; width: 195px; border-radius: 10px; " src="{{ url('/uploads/category/' . $category->image) }}" alt="{{$category->name}}">
                    <div class="category-name-overlay">
                        <h5>{{ $category->name }}</h5>
                    </div>
                </div>
            </a>
        </div>

        @endforeach

    </div>
</div>




<div class="container">
    <div>
        <h1><b>New Products ({{ $allProduct ? count($allProduct) : 0 }})</b></h1>
    </div>
    <div class="product-grid">


        @foreach ($allProduct as $product)
        <div style="height: 300px; width: 200px;  border-radius:7%" class="product-card">
            <img src="{{ url('/uploads/product/' . $product->image) }}" alt="{{ $product->name }}">
            <div class="details">
                <h2>{{ $product->name }}</h2>
                <p class="price">{{ number_format($product->price, 2) }}BDT</p>
                <div style="text-align: center;">
                    <a style="border: none; background-color: transparent; " class="btn btn-warning"
                        href=""><b><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                <path
                                    d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15" />
                            </svg></b></a>
                    <a style="border: none; background-color: transparent; " class="btn btn-warning"
                        href="{{ route('show.product', $product->id) }}"><b><svg xmlns="http://www.w3.org/2000/svg"
                                width="30" height="30" fill="currentColor" class="bi bi-eye-fill"
                                viewBox="0 0 16 16">
                                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0" />
                                <path
                                    d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7" />
                            </svg></b></a>
                    <a style="border: none; background-color: transparent; " class="btn btn-warning"
                        href="{{ route('add.to.cart', $product->id) }}"><b><svg xmlns="http://www.w3.org/2000/svg"
                                width="30" height="30" fill="currentColor" class="bi bi-cart4"
                                viewBox="0 0 16 16">
                                <path
                                    d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l.5 2H5V5zM6 5v2h2V5zm3 0v2h2V5zm3 0v2h1.36l.5-2zm1.11 3H12v2h.61zM11 8H9v2h2zM8 8H6v2h2zM5 8H3.89l.5 2H5zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0" />
                            </svg></b></a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>




@endsection