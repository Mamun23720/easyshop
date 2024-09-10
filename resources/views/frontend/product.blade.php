@extends('frontend.master2')

@section('content')


    <!-- Products -->

    <div class="container mt-5">
        <div>
            <h1>All Products ({{ $allProduct ? count($allProduct) : 0 }})</h1>
        </div>
        <div class="product-grid">


            @foreach ($allProduct as $product)
                <div style="height: 350px; width: 250px;  border-radius:5%" class="product-card">
                    <div class="image-container">


                        <a href="{{ route('show.product', $product->id) }}">
                            <img style="height: 230px; width: 100%;" src="{{ url('/uploads/product/' . $product->image) }}"
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

                                <a style="margin-left: 5px;" class="button button2 mt-0"
                                    href="{{ route('add.to.cart', $product->id) }}"><b><i class="bi bi-cart4 mr-2"></i>Add
                                        to
                                        Cart</b></a>

                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>

    <!-- Products -->


@endsection
