@extends('frontend.master2')

@section('content')


    <!-- Banner -->



    <div class="slider-container">
        <div class="slider">
            @foreach ($allBanner as $index => $banner)
                <div class="slide {{ $loop->first ? 'active' : '' }}">
                    <img src="{{ url('/uploads/banner/' . $banner->banner_image) }}" alt="Banner {{ $index + 1 }}">
                    <div class="slider-content">
                        <h1 style="color: white; font-size:48px; ">{{ $banner->banner_name }}</h1>
                        <h5 style="color: white; font-size : 36px ;">{{ $banner->banner_description }}</h5>
                        <a style="color: white; background-color: #0e8ce4" class="button button3 btn-lg mt-5" href="{{ route('frontend.product') }}"><b>Shop Now</b></a>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Navigation Dots -->
        <div class="dots">
            @foreach ($allBanner as $index => $banner)
                <span class="dot {{ $loop->first ? 'active' : '' }}" onclick="currentSlide($index + 1)"></span>
            @endforeach
        </div>
    </div>

    <br>

    <!-- Banner -->


    <!-- Categories -->


    <div>
        <h1 style="text-align: center; color:#206bbb;"><b>Categories ({{ $allCategory ? count($allCategory) : 0 }})</b></h1>
    </div>


    <div class="container mt-5">
        <div class="row">

            @foreach ($allCategory as $category)
                <div class="col">
                    <a href="{{ route('show.category', $category->id) }}">
                        <div style="background: #4160ff; height: 200px; width: 200px; gap: 5px; "
                            class="category-box d-flex align-items-center justify-content-center">
                            <img class="category-image" style="height: 190px; width: 190px; border-radius: 50%; "
                                src="{{ url('/uploads/category/' . $category->image) }}" alt="{{ $category->name }}">
                            <div class="category-name-overlay">
                                <h5><b>{{ $category->name }}</b></h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach

        </div>
    </div>

    <br><br>


    <!-- Categories -->


    <!-- Products -->

    <div class="container-fluid mt-5">
        <h1>Popular Products</h1>
        <div class="product-grid">

            @foreach ($allProduct as $product)
                <div style="height: 150px; width: 150px;" class="product-card">
                    <div style="height: 100%;" class="image-container">

                                <a href="{{ route('show.product', $product->id) }}">
                                    <img style="height: 100%; width: 100%;" src="{{ url('/uploads/product/' . $product->image) }}"
                                        alt="{{ $product->name }}" />
                                    <div class="overlay">
                                        <i style="font-size:48px" class="bi bi-eye"></i>
                                    </div>
                                </a>

                        <div class="details">

                                    <h2>{{ $product->name }}</h2>
                                    <p class="price">Price: {{ number_format($product->price, 2) }} BDT</p>

                            <div style="text-align: center;">

                                        <!-- <a style="border: none; background-color: transparent; " class="btn btn-warning" href="{{ route('show.product', $product->id) }}"><b><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16"><path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0" /><path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7" /></svg></b></a>

                                <a style="margin-right: 5px;" class="button button3 mt-3" href=""><b>Buy Now</b></a> -->


                                {{-- <a style="margin-right: 0px; font-size:28px " class="button button3" href="#"><b><i class="bi bi-heart"></i></b></a> --}}


                                <a style="margin-left: 5px;" class="button button2 mt-0" href="{{ route('add.to.cart', $product->id) }}"><b><i class="bi bi-cart4 mr-2"></i>Add to Cart</b></a>

                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>

    <!-- Products -->
@endsection
