@extends('frontend.master2')

@section('content')


    <!-- Products -->

    <div style="padding-left: 100px; padding-right: 100px;" class="container-fluid mt-2" >
        <div class="product-grid">

                        @foreach ($allProduct as $product)
                <div style="height: 300px; width: 225px;" class="product-card">
                    <div class="image-container">


                        <a href="{{ route('show.product', $product->id) }}">
                            <img style="height: 230px; width: 100%;" src="{{ url('/uploads/product/' . $product->image) }}"
                                alt="{{ $product->name }}" />
                            
                        </a>


                        <div class="details">

                        <div class="row" >

                        <div class="col" >

                            <p style="font-size: 20px; color: black; width: 140px; text-overflow: ellipsis; overflow: hidden; white-space: nowrap;" ><b>{{ $product->name }}</b></p>
                            <p style="font-size: 18px; color: red; width: 100px; text-overflow: ellipsis; overflow: hidden; white-space: nowrap; " class="price">{{ number_format($product->price, 2) }} BDT</p>

                        </div>

                        <div style="padding-right: 0px;"  class="col mt-2" >
                            <a style="height: 50px; width: 50px; border-radius:50%; padding: 5px 0px;" class="button button2" href="{{ route('add.to.cart', $product->id) }}"><i style="font-size: 28px;" class="bi bi-cart4"></i></a>
                        </div>
                            
                        </div>    
                            
                            <div style="text-align: center;">

                                <!-- <a style="border: none; background-color: transparent; " class="btn btn-warning" href="{{ route('show.product', $product->id) }}"><b><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16"><path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0" /><path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7" /></svg></b></a>

            <a style="margin-right: 5px;" class="button button3 mt-3" href=""><b>Buy Now</b></a> -->

                                <!-- <a style="margin-left: 5px;" class="button button2 mt-0"
                                    href="{{ route('add.to.cart', $product->id) }}"><b><i class="bi bi-cart4 mr-2"></i>Add
                                        to
                                        Cart</b></a> -->

                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>

    <!-- Products -->


@endsection
