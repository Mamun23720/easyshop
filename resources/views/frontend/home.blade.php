@extends('frontend.master2')

@section('content')


<!-- slide -->



<div style="margin-top: 1px;" class="slider-container">
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



<!-- slide -->



<!-- Products -->

<div style="padding-left: 100px; padding-right: 100px;" class="container-fluid mt-4">
    <div style="text-align: center;">
        <hr>
        <h3><b style=" font-family:'Times New Roman', Times, serif">Flash Sale</b></h3>
        <hr>
    </div>
    <div style="justify-content: center;" class="product-grid mt-3">


        @foreach ($flashSale as $product)
        <div style="height: 300px; width: 225px;" class="product-card">
            <div class="image-container">


                <a href="{{ route('show.product', $product->id) }}">
                    <img style="height: 230px; width: 100%;" src="{{ url('/uploads/product/' . $product->image) }}"
                        alt="{{ $product->name }}" />

                </a>


                <div class="details">

                    <div class="row">

                        <div class="col">

                            <p style="font-size: 18px; width: 140px; text-overflow: ellipsis; overflow: hidden; white-space: nowrap;"><b> {{ $product->name }}</b></p>
                            <p style="font-size: 16px; color: red; width: 140px; text-overflow: ellipsis; overflow: hidden; white-space: nowrap; " class="price">৳{{ number_format($product->price, 2) }} <span style="font-size: 12px; text-decoration:line-through;">৳2050</span></p>

                        </div>

                        <div style="padding-right: 0px;" class="col mt-2">
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
    <br>
</div>


<!-- Products -->


<!-- Categories -->

<div style="padding-left: 100px; padding-right: 100px;" class="container-fluid mt-1">
    <div style="text-align: center;">
        <hr>
        <h3><b style=" font-family:'Times New Roman', Times, serif">Categories</b></h3>
        <hr>
    </div>


    <div class="container-fluid mt-3">
        <div style="display: flex; flex-wrap: wrap; gap: 23px; justify-content:center;" class="row">

            @foreach ($allCategory as $category)
            <div style="display: flex; justify-content: center; align-items: center; max-width: 8.5%" class="col">
                <a href="{{ route('show.category', $category->id) }}">
                    <div style="background: #4160ff; height: 120px; width: 120px; "
                        class="category-box d-flex align-items-center justify-content-center">
                        <img class="category-image" style="height: 118px; width: 118px;"
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
    <br>

</div>

<!-- Categories -->


<!-- Banner -->

<div style="padding-left: 100px; padding-right: 100px;" class="container-fluid mt-1">

    <div style="text-align: center;">
        <hr>
        <h3><b style=" font-family:'Times New Roman', Times, serif">Offer's</b></h3>
        <hr>
    </div>

    <div style="justify-content:center;" class="row mt-3">

        <div class="col">

            <div class="image">

                <img style="height: 280px; width: 600px; border: 5px solid white; filter: brightness(30%); " src="{{url('/uploads/important/image.png')}}" alt="">
                <div class="image-content">
                    <h3>Top Offer</h3><br>
                    <a style="color: white; background-color: #0e8ce4; height:42px;" class="button button3 btn-lg mt-0" href="{{ route('frontend.product') }}"><b>Shop Now</b></a>
                </div>
            </div>

        </div>

        <div class="col">

            <div class="image">

                <img style="height: 280px; width: 600px; border: 5px solid white; filter: brightness(30%); " src="{{url('/uploads/important/image.png')}}" alt="">
                <div class="image-content">
                    <h3>Hot Offer</h3><br>
                    <a style="color: white; background-color: #0e8ce4; height:42px;" class="button button3 btn-lg mt-0" href="{{ route('frontend.product') }}"><b>Shop Now</b></a>
                </div>
            </div>

        </div>

        <div class="col">

            <div class="image">

                <img style="height: 280px; width: 600px; border: 5px solid white; filter: brightness(30%); " src="{{url('/uploads/important/image.png')}}" alt="">
                <div class="image-content">
                    <h3>Biggest Offer</h3><br>
                    <a style="color: white; background-color: #0e8ce4; height:42px;" class="button button3 btn-lg mt-0" href="{{ route('frontend.product') }}"><b>Shop Now</b></a>
                </div>
            </div>

        </div>

    </div>
    <br>


</div>

<!-- Banner -->


<!-- Products -->

<div style="padding-left: 100px; padding-right: 100px;" class="container-fluid mt-1">
    <div style="text-align: center;">
        <hr>
        <h3><b style=" font-family:'Times New Roman', Times, serif">Just For You</b></h3>
        <hr>
    </div>
    <div style="justify-content: center;" class="product-grid mt-3">


        @foreach ($allProduct as $product)
        <div style="height: 300px; width: 225px;" class="product-card">
            <div class="image-container">


                <a href="{{ route('show.product', $product->id) }}">
                    <img style="height: 230px; width: 100%;" src="{{ url('/uploads/product/' . $product->image) }}"
                        alt="{{ $product->name }}" />

                </a>


                <div class="details">

                    <div class="row">

                        <div class="col">

                            <p style="font-size: 18px; width: 140px; text-overflow: ellipsis; overflow: hidden; white-space: nowrap;"><b> {{ $product->name }}</b></p>
                            <p style="font-size: 16px; color: red; width: 140px; text-overflow: ellipsis; overflow: hidden; white-space: nowrap; " class="price">৳{{ number_format($product->price, 2) }} <span style="font-size: 12px; text-decoration:line-through;">৳2050</span></p>

                        </div>

                        <div style="padding-right: 0px;" class="col mt-2">
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
    <hr>
</div>

<!-- Products -->



<!-- newsletter -->


<div class="newsletter">
<div style="padding-left: 100px; padding-right: 100px;" class="container mt-1">
			<div class="row">
				<div class="col">
					<div class="newsletter_container d-flex flex-lg-row flex-column align-items-lg-center align-items-center justify-content-lg-start justify-content-center">
						<div class="newsletter_title_container">
							<div class="newsletter_icon"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-send" viewBox="0 0 16 16">
  <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576zm6.787-8.201L1.591 6.602l4.339 2.76z"/>
</svg></div>
							<div class="newsletter_title">Sign up for Newsletter</div>
							<div class="newsletter_text"><p>...and receive %20 coupon for your first shopping.</p></div>
						</div>
						<div class="newsletter_content clearfix">
							<form action="#" class="newsletter_form">
								<input type="email" class="newsletter_input" placeholder="Enter your email address" required>
								<button class="newsletter_button">Subscribe</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


<!-- newsletter -->


@endsection