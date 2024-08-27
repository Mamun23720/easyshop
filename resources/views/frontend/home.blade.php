@extends('frontend.master2')

@section('content')






<div class="banner">
<div class="banner_background" style="background-image:url(/uploads/important/banner.jpeg)"></div>
<div class="container fill_height">
<div class="row fill_height">
<div class="col-lg-5 offset-lg-4 fill_height">
<div style="text-align: center;" class="banner_content">
<h1 class="banner_text"><b>we are always up to date</b></h1>
<a class="btn btn-warning btn-lg" href="{{route('frontend.product')}}"><b>Shop Now</b></a>
</div>
</div>
</div>
</div>
</div>




<h1 class="mt-5 mb-2" ><b>Popular Categories</b></h1><br>

<div style="padding: 0px; " class="characteristics">
<div class="container">
<div class="row">

<div class="col-lg-3 col-md-6 char_col">
<a href="#">
<div style="background: #cd7a7a; border-radius: 10px; height: 300px; width: 280px; background-image:url(/uploads/important/banner.jpeg);" class="char_item d-flex flex-row align-items-center justify-content-start">
<div class="char_content">
<div class="char_title ml-4"><b><h4>Womens Fashion</h4></b></div>
</div>
</div>
</div>
</a>


<div class="col-lg-3 col-md-6 char_col">
<a href="#">
<div  style="background: #8a59e5; border-radius: 10px; height: 300px; width: 280px;" class="char_item d-flex flex-row align-items-center justify-content-start">
<div class="char_content">
<div class="char_title ml-5"><b><h4>Cosmetics</h4></b></div>
</div>
</div>
</div>
</a>


<div class="col-lg-3 col-md-6 char_col">
<a href="#">
<div  style="background: #6eed96; border-radius: 10px; height: 300px; width: 280px;" class="char_item d-flex flex-row align-items-center justify-content-start">
<div class="char_content">
<div class="char_title ml-5"><b><h4>Smartphones</h4></b></div>
</div>
</div>
</div>
</a>


<div class="col-lg-3 col-md-6 char_col">
<a href="#">
<div  style="background: #ff8a43; border-radius: 10px; height: 300px; width: 280px;" class="char_item d-flex flex-row align-items-center justify-content-start">
<div class="char_content">
<div class="char_title ml-5"><b><h4>Jewellerys</h4></b></div>
</div>
</div>
</div>
</a>

</div>
</div>
</div>



<div class="container">
        <div>
        <h1><b>New Products({{$allProduct ? count($allProduct) : 0}})</b></h1>
        </div>
        <div class="product-grid">
            @foreach($allProduct as $product)
                <div style="height: 300px; width: 200px;  border-radius:10%" class="product-card">
                    <img src="{{url('/uploads/product/'.$product->image)}}" alt="{{$product->name}}">
                    <div class="details">
                        <h2>{{$product->name}}</h2>
                        <p>{{ $product->category }}</p>
                        <p class="price">{{ number_format($product->price, 2) }}BDT</p>
                        <div style="text-align: center;" >
                        <a style="border: none; background-color: transparent; " class="btn btn-warning" href=""><b><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                        <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15"/>
                        </svg></b></a>
                        <a style="border: none; background-color: transparent; " class="btn btn-warning" href="{{ route('show.product', $product->id) }}"><b><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0"/>
                        <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7"/>
                        </svg></b></a>
                        <a style="border: none; background-color: transparent; " class="btn btn-warning" href="{{ route('add.to.cart', $product->id) }}"><b><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                        <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l.5 2H5V5zM6 5v2h2V5zm3 0v2h2V5zm3 0v2h1.36l.5-2zm1.11 3H12v2h.61zM11 8H9v2h2zM8 8H6v2h2zM5 8H3.89l.5 2H5zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0"/>
                        </svg></b></a>
                        <!-- <a href="{{ route('show.product', $product->id) }}" class="btn"><b>View Details</b></a>
                        <a href="" class="btn btn-warning"><b>View</b></a> -->
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
</div>




<div class="popular_categories">
<div class="container">
<div class="row">
<div class="col-lg-3">
<div class="popular_categories_content">
<div class="popular_categories_title">Popular Categories</div>
<div class="popular_categories_slider_nav">
<div class="popular_categories_prev popular_categories_nav"><i class="fas fa-angle-left ml-auto"></i></div>
<div class="popular_categories_next popular_categories_nav"><i class="fas fa-angle-right ml-auto"></i></div>
</div>
<div class="popular_categories_link"><a href="#">full catalog</a></div>
</div>
</div>

<div class="col-lg-9">
<div class="popular_categories_slider_container">
<div class="owl-carousel owl-theme popular_categories_slider">

<div class="owl-item">
<div class="popular_category d-flex flex-column align-items-center justify-content-center">
<div class="popular_category_image"><img src="images/popular_1.png" alt></div>
<div class="popular_category_text">Smartphones & Tablets</div>
</div>
</div>

<div class="owl-item">
<div class="popular_category d-flex flex-column align-items-center justify-content-center">
<div class="popular_category_image"><img src="images/popular_2.png" alt></div>
<div class="popular_category_text">Computers & Laptops</div>
</div>
</div>

<div class="owl-item">
<div class="popular_category d-flex flex-column align-items-center justify-content-center">
<div class="popular_category_image"><img src="images/popular_3.png" alt></div>
<div class="popular_category_text">Gadgets</div>
</div>
</div>

<div class="owl-item">
<div class="popular_category d-flex flex-column align-items-center justify-content-center">
<div class="popular_category_image"><img src="images/popular_4.png" alt></div>
<div class="popular_category_text">Video Games & Consoles</div>
</div>
</div>

<div class="owl-item">
<div class="popular_category d-flex flex-column align-items-center justify-content-center">
<div class="popular_category_image"><img src="images/popular_5.png" alt></div>
<div class="popular_category_text">Accessories</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="banner_2">
<div class="banner_2_background" style="background-image:url(images/banner_2_background.jpg)"></div>
<div class="banner_2_container">
<div class="banner_2_dots"></div>

<div class="owl-carousel owl-theme banner_2_slider">

<div class="owl-item">
<div class="banner_2_item">
<div class="container fill_height">
<div class="row fill_height">
<div class="col-lg-4 col-md-6 fill_height">
<div class="banner_2_content">
<div class="banner_2_category">Laptops</div>
<div class="banner_2_title">MacBook Air 13</div>
<div class="banner_2_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</div>
<div class="rating_r rating_r_4 banner_2_rating"><i></i><i></i><i></i><i></i><i></i></div>
<div class="button banner_2_button"><a href="#">Explore</a></div>
</div>
</div>
<div class="col-lg-8 col-md-6 fill_height">
<div class="banner_2_image_container">
<div class="banner_2_image"><img src="images/banner_2_product.png" alt></div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="owl-item">
<div class="banner_2_item">
<div class="container fill_height">
<div class="row fill_height">
<div class="col-lg-4 col-md-6 fill_height">
<div class="banner_2_content">
<div class="banner_2_category">Laptops</div>
<div class="banner_2_title">MacBook Air 13</div>
<div class="banner_2_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</div>
<div class="rating_r rating_r_4 banner_2_rating"><i></i><i></i><i></i><i></i><i></i></div>
<div class="button banner_2_button"><a href="#">Explore</a></div>
</div>
</div>
<div class="col-lg-8 col-md-6 fill_height">
<div class="banner_2_image_container">
<div class="banner_2_image"><img src="images/banner_2_product.png" alt></div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="owl-item">
<div class="banner_2_item">
<div class="container fill_height">
<div class="row fill_height">
<div class="col-lg-4 col-md-6 fill_height">
<div class="banner_2_content">
<div class="banner_2_category">Laptops</div>
<div class="banner_2_title">MacBook Air 13</div>
<div class="banner_2_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</div>
<div class="rating_r rating_r_4 banner_2_rating"><i></i><i></i><i></i><i></i><i></i></div>
<div class="button banner_2_button"><a href="#">Explore</a></div>
</div>
</div>
<div class="col-lg-8 col-md-6 fill_height">
<div class="banner_2_image_container">
<div class="banner_2_image"><img src="images/banner_2_product.png" alt></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="new_arrivals">
<div class="container">
<div class="row">
<div class="col">
<div class="tabbed_container">
<div class="tabs clearfix tabs-right">
<div class="new_arrivals_title">Hot New Arrivals</div>
<ul class="clearfix">
<li class="active">Featured</li>
<li>Audio & Video</li>
<li>Laptops & Computers</li>
</ul>
<div class="tabs_line"><span></span></div>
</div>
<div class="row">
<div class="col-lg-9" style="z-index:1;">

<div class="product_panel panel active">
<div class="arrivals_slider slider">

<div class="arrivals_slider_item">
<div class="border_active"></div>
<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_1.jpg" alt></div>
<div class="product_content">
<div class="product_price">$225</div>
<div class="product_name"><div><a href="product.html">Astro M2 Black</a></div></div>
<div class="product_extras">
<div class="product_color">
<input type="radio" checked name="product_color" style="background:#b19c83">
<input type="radio" name="product_color" style="background:#000000">
<input type="radio" name="product_color" style="background:#999999">
</div>
<button class="product_cart_button">Add to Cart</button>
</div>
</div>
<div class="product_fav"><i class="fas fa-heart"></i></div>
<ul class="product_marks">
<li class="product_mark product_discount">-25%</li>
<li class="product_mark product_new">new</li>
</ul>
</div>
</div>

<div class="arrivals_slider_item">
<div class="border_active"></div>
<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_2.jpg" alt></div>
<div class="product_content">
<div class="product_price">$379</div>
<div class="product_name"><div><a href="product.html">Transcend T.Sonic</a></div></div>
<div class="product_extras">
<div class="product_color">
<input type="radio" checked name="product_color" style="background:#b19c83">
<input type="radio" name="product_color" style="background:#000000">
<input type="radio" name="product_color" style="background:#999999">
</div>
<button class="product_cart_button active">Add to Cart</button>
</div>
</div>
<div class="product_fav"><i class="fas fa-heart"></i></div>
<ul class="product_marks">
<li class="product_mark product_discount"></li>
<li class="product_mark product_new">new</li>
</ul>
</div>
</div>

<div class="arrivals_slider_item">
<div class="border_active"></div>
<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_3.jpg" alt></div>
<div class="product_content">
<div class="product_price">$379</div>
<div class="product_name"><div><a href="product.html">Xiaomi Band 2...</a></div></div>
<div class="product_extras">
<div class="product_color">
<input type="radio" checked name="product_color" style="background:#b19c83">
<input type="radio" name="product_color" style="background:#000000">
<input type="radio" name="product_color" style="background:#999999">
</div>
<button class="product_cart_button">Add to Cart</button>
</div>
</div>
<div class="product_fav"><i class="fas fa-heart"></i></div>
<ul class="product_marks">
<li class="product_mark product_discount"></li>
<li class="product_mark product_new">new</li>
</ul>
</div>
</div>

<div class="arrivals_slider_item">
<div class="border_active"></div>
<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_4.jpg" alt></div>
<div class="product_content">
<div class="product_price">$225</div>
<div class="product_name"><div><a href="product.html">Rapoo T8 White</a></div></div>
<div class="product_extras">
<div class="product_color">
<input type="radio" checked name="product_color" style="background:#b19c83">
<input type="radio" name="product_color" style="background:#000000">
<input type="radio" name="product_color" style="background:#999999">
</div>
<button class="product_cart_button">Add to Cart</button>
</div>
</div>
<div class="product_fav"><i class="fas fa-heart"></i></div>
<ul class="product_marks">
<li class="product_mark product_discount"></li>
<li class="product_mark product_new">new</li>
</ul>
</div>
</div>

<div class="arrivals_slider_item">
<div class="border_active"></div>
<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_5.jpg" alt></div>
<div class="product_content">
<div class="product_price">$225</div>
<div class="product_name"><div><a href="product.html">Philips BT6900A</a></div></div>
<div class="product_extras">
<div class="product_color">
<input type="radio" checked name="product_color" style="background:#b19c83">
<input type="radio" name="product_color" style="background:#000000">
<input type="radio" name="product_color" style="background:#999999">
</div>
<button class="product_cart_button">Add to Cart</button>
</div>
</div>
<div class="product_fav"><i class="fas fa-heart"></i></div>
<ul class="product_marks">
<li class="product_mark product_discount"></li>
<li class="product_mark product_new">new</li>
</ul>
</div>
</div>

<div class="arrivals_slider_item">
<div class="border_active"></div>
<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_6.jpg" alt></div>
<div class="product_content">
<div class="product_price">$379</div>
<div class="product_name"><div><a href="product.html">Nokia 3310(2017)...</a></div></div>
<div class="product_extras">
<div class="product_color">
<input type="radio" checked name="product_color" style="background:#b19c83">
<input type="radio" name="product_color" style="background:#000000">
<input type="radio" name="product_color" style="background:#999999">
</div>
<button class="product_cart_button">Add to Cart</button>
</div>
</div>
<div class="product_fav"><i class="fas fa-heart"></i></div>
<ul class="product_marks">
<li class="product_mark product_discount"></li>
<li class="product_mark product_new">new</li>
</ul>
</div>
</div>

<div class="arrivals_slider_item">
<div class="border_active"></div>
<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_7.jpg" alt></div>
<div class="product_content">
<div class="product_price">$379</div>
<div class="product_name"><div><a href="product.html">Rapoo 7100p Gray</a></div></div>
<div class="product_extras">
<div class="product_color">
<input type="radio" checked name="product_color" style="background:#b19c83">
<input type="radio" name="product_color" style="background:#000000">
<input type="radio" name="product_color" style="background:#999999">
</div>
<button class="product_cart_button">Add to Cart</button>
</div>
</div>
<div class="product_fav"><i class="fas fa-heart"></i></div>
<ul class="product_marks">
<li class="product_mark product_discount">-25%</li>
<li class="product_mark product_new">new</li>
</ul>
</div>
</div>

<div class="arrivals_slider_item">
<div class="border_active"></div>
<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_8.jpg" alt></div>
<div class="product_content">
<div class="product_price">$225</div>
<div class="product_name"><div><a href="product.html">Canon EF</a></div></div>
<div class="product_extras">
<div class="product_color">
<input type="radio" checked name="product_color" style="background:#b19c83">
<input type="radio" name="product_color" style="background:#000000">
<input type="radio" name="product_color" style="background:#999999">
</div>
<button class="product_cart_button">Add to Cart</button>
</div>
</div>
<div class="product_fav"><i class="fas fa-heart"></i></div>
<ul class="product_marks">
<li class="product_mark product_discount"></li>
<li class="product_mark product_new">new</li>
</ul>
</div>
</div>

<div class="arrivals_slider_item">
<div class="border_active"></div>
<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_1.jpg" alt></div>
<div class="product_content">
<div class="product_price">$225</div>
<div class="product_name"><div><a href="product.html">Gembird SPK-103</a></div></div>
<div class="product_extras">
<div class="product_color">
<input type="radio" checked name="product_color" style="background:#b19c83">
<input type="radio" name="product_color" style="background:#000000">
<input type="radio" name="product_color" style="background:#999999">
</div>
<button class="product_cart_button">Add to Cart</button>
</div>
</div>
<div class="product_fav"><i class="fas fa-heart"></i></div>
<ul class="product_marks">
<li class="product_mark product_discount"></li>
<li class="product_mark product_new">new</li>
</ul>
</div>
</div>

<div class="arrivals_slider_item">
<div class="border_active"></div>
<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_2.jpg" alt></div>
<div class="product_content">
<div class="product_price">$379</div>
<div class="product_name"><div><a href="product.html">Canon IXUS 175...</a></div></div>
<div class="product_extras">
<div class="product_color">
<input type="radio" checked name="product_color" style="background:#b19c83">
<input type="radio" name="product_color" style="background:#000000">
<input type="radio" name="product_color" style="background:#999999">
</div>
<button class="product_cart_button">Add to Cart</button>
</div>
</div>
<div class="product_fav"><i class="fas fa-heart"></i></div>
<ul class="product_marks">
<li class="product_mark product_discount"></li>
<li class="product_mark product_new">new</li>
</ul>
</div>
</div>

<div class="arrivals_slider_item">
<div class="border_active"></div>
<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_3.jpg" alt></div>
<div class="product_content">
<div class="product_price">$379</div>
<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
<div class="product_extras">
<div class="product_color">
<input type="radio" checked name="product_color" style="background:#b19c83">
<input type="radio" name="product_color" style="background:#000000">
<input type="radio" name="product_color" style="background:#999999">
</div>
<button class="product_cart_button">Add to Cart</button>
</div>
</div>
<div class="product_fav"><i class="fas fa-heart"></i></div>
<ul class="product_marks">
<li class="product_mark product_discount"></li>
<li class="product_mark product_new">new</li>
</ul>
</div>
</div>

<div class="arrivals_slider_item">
<div class="border_active"></div>
<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_4.jpg" alt></div>
<div class="product_content">
<div class="product_price">$225</div>
<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
<div class="product_extras">
<div class="product_color">
<input type="radio" checked name="product_color" style="background:#b19c83">
<input type="radio" name="product_color" style="background:#000000">
<input type="radio" name="product_color" style="background:#999999">
</div>
<button class="product_cart_button">Add to Cart</button>
</div>
</div>
<div class="product_fav"><i class="fas fa-heart"></i></div>
<ul class="product_marks">
<li class="product_mark product_discount"></li>
<li class="product_mark product_new">new</li>
</ul>
</div>
</div>

<div class="arrivals_slider_item">
<div class="border_active"></div>
<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_5.jpg" alt></div>
<div class="product_content">
<div class="product_price">$225</div>
<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
<div class="product_extras">
<div class="product_color">
<input type="radio" checked name="product_color" style="background:#b19c83">
<input type="radio" name="product_color" style="background:#000000">
<input type="radio" name="product_color" style="background:#999999">
</div>
<button class="product_cart_button">Add to Cart</button>
</div>
</div>
<div class="product_fav"><i class="fas fa-heart"></i></div>
<ul class="product_marks">
<li class="product_mark product_discount"></li>
<li class="product_mark product_new">new</li>
</ul>
</div>
</div>

<div class="arrivals_slider_item">
<div class="border_active"></div>
<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_6.jpg" alt></div>
<div class="product_content">
<div class="product_price">$379</div>
<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
<div class="product_extras">
<div class="product_color">
<input type="radio" checked name="product_color" style="background:#b19c83">
<input type="radio" name="product_color" style="background:#000000">
<input type="radio" name="product_color" style="background:#999999">
</div>
<button class="product_cart_button">Add to Cart</button>
</div>
</div>
<div class="product_fav"><i class="fas fa-heart"></i></div>
<ul class="product_marks">
<li class="product_mark product_discount"></li>
<li class="product_mark product_new">new</li>
</ul>
</div>
</div>

<div class="arrivals_slider_item">
<div class="border_active"></div>
<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_7.jpg" alt></div>
<div class="product_content">
<div class="product_price">$379</div>
<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
<div class="product_extras">
<div class="product_color">
<input type="radio" checked name="product_color" style="background:#b19c83">
<input type="radio" name="product_color" style="background:#000000">
<input type="radio" name="product_color" style="background:#999999">
</div>
<button class="product_cart_button">Add to Cart</button>
</div>
</div>
<div class="product_fav"><i class="fas fa-heart"></i></div>
<ul class="product_marks">
<li class="product_mark product_discount"></li>
<li class="product_mark product_new">new</li>
</ul>
</div>
</div>

<div class="arrivals_slider_item">
<div class="border_active"></div>
<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_8.jpg" alt></div>
<div class="product_content">
<div class="product_price">$225</div>
<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
<div class="product_extras">
<div class="product_color">
<input type="radio" checked name="product_color" style="background:#b19c83">
<input type="radio" name="product_color" style="background:#000000">
<input type="radio" name="product_color" style="background:#999999">
</div>
<button class="product_cart_button">Add to Cart</button>
</div>
</div>
<div class="product_fav"><i class="fas fa-heart"></i></div>
<ul class="product_marks">
<li class="product_mark product_discount"></li>
<li class="product_mark product_new">new</li>
</ul>
</div>
</div>
</div>
<div class="arrivals_slider_dots_cover"></div>
</div>

<div class="product_panel panel">
<div class="arrivals_slider slider">

<div class="arrivals_slider_item">
<div class="border_active"></div>
<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_1.jpg" alt></div>
<div class="product_content">
<div class="product_price">$225</div>
<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
<div class="product_extras">
<div class="product_color">
<input type="radio" checked name="product_color" style="background:#b19c83">
<input type="radio" name="product_color" style="background:#000000">
<input type="radio" name="product_color" style="background:#999999">
</div>
<button class="product_cart_button">Add to Cart</button>
</div>
</div>
<div class="product_fav"><i class="fas fa-heart"></i></div>
<ul class="product_marks">
<li class="product_mark product_discount">-25%</li>
<li class="product_mark product_new">new</li>
</ul>
</div>
</div>

<div class="arrivals_slider_item">
<div class="border_active"></div>
<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_2.jpg" alt></div>
<div class="product_content">
<div class="product_price">$379</div>
<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
<div class="product_extras">
<div class="product_color">
<input type="radio" checked name="product_color" style="background:#b19c83">
<input type="radio" name="product_color" style="background:#000000">
<input type="radio" name="product_color" style="background:#999999">
</div>
<button class="product_cart_button active">Add to Cart</button>
</div>
</div>
<div class="product_fav"><i class="fas fa-heart"></i></div>
<ul class="product_marks">
<li class="product_mark product_discount"></li>
<li class="product_mark product_new">new</li>
</ul>
</div>
</div>

<div class="arrivals_slider_item">
<div class="border_active"></div>
<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_3.jpg" alt></div>
<div class="product_content">
<div class="product_price">$379</div>
<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
<div class="product_extras">
<div class="product_color">
<input type="radio" checked name="product_color" style="background:#b19c83">
<input type="radio" name="product_color" style="background:#000000">
<input type="radio" name="product_color" style="background:#999999">
</div>
<button class="product_cart_button">Add to Cart</button>
</div>
</div>
<div class="product_fav"><i class="fas fa-heart"></i></div>
<ul class="product_marks">
<li class="product_mark product_discount"></li>
<li class="product_mark product_new">new</li>
</ul>
</div>
</div>

<div class="arrivals_slider_item">
<div class="border_active"></div>
<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_4.jpg" alt></div>
<div class="product_content">
<div class="product_price">$225</div>
<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
<div class="product_extras">
<div class="product_color">
<input type="radio" checked name="product_color" style="background:#b19c83">
<input type="radio" name="product_color" style="background:#000000">
<input type="radio" name="product_color" style="background:#999999">
</div>
<button class="product_cart_button">Add to Cart</button>
</div>
</div>
<div class="product_fav"><i class="fas fa-heart"></i></div>
<ul class="product_marks">
<li class="product_mark product_discount"></li>
<li class="product_mark product_new">new</li>
</ul>
</div>
</div>

<div class="arrivals_slider_item">
<div class="border_active"></div>
<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_5.jpg" alt></div>
<div class="product_content">
<div class="product_price">$225</div>
<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
<div class="product_extras">
<div class="product_color">
<input type="radio" checked name="product_color" style="background:#b19c83">
<input type="radio" name="product_color" style="background:#000000">
<input type="radio" name="product_color" style="background:#999999">
</div>
<button class="product_cart_button">Add to Cart</button>
</div>
</div>
<div class="product_fav"><i class="fas fa-heart"></i></div>
<ul class="product_marks">
<li class="product_mark product_discount"></li>
<li class="product_mark product_new">new</li>
</ul>
</div>
</div>

<div class="arrivals_slider_item">
<div class="border_active"></div>
<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_6.jpg" alt></div>
<div class="product_content">
<div class="product_price">$379</div>
<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
<div class="product_extras">
<div class="product_color">
<input type="radio" checked name="product_color" style="background:#b19c83">
<input type="radio" name="product_color" style="background:#000000">
<input type="radio" name="product_color" style="background:#999999">
</div>
<button class="product_cart_button">Add to Cart</button>
</div>
</div>
<div class="product_fav"><i class="fas fa-heart"></i></div>
<ul class="product_marks">
<li class="product_mark product_discount"></li>
<li class="product_mark product_new">new</li>
</ul>
</div>
</div>

<div class="arrivals_slider_item">
<div class="border_active"></div>
<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_7.jpg" alt></div>
<div class="product_content">
<div class="product_price">$379</div>
<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
<div class="product_extras">
<div class="product_color">
<input type="radio" checked name="product_color" style="background:#b19c83">
<input type="radio" name="product_color" style="background:#000000">
<input type="radio" name="product_color" style="background:#999999">
</div>
<button class="product_cart_button">Add to Cart</button>
</div>
</div>
<div class="product_fav"><i class="fas fa-heart"></i></div>
<ul class="product_marks">
<li class="product_mark product_discount">-25%</li>
<li class="product_mark product_new">new</li>
</ul>
</div>
</div>

<div class="arrivals_slider_item">
<div class="border_active"></div>
<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_8.jpg" alt></div>
<div class="product_content">
<div class="product_price">$225</div>
<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
<div class="product_extras">
<div class="product_color">
<input type="radio" checked name="product_color" style="background:#b19c83">
<input type="radio" name="product_color" style="background:#000000">
<input type="radio" name="product_color" style="background:#999999">
</div>
<button class="product_cart_button">Add to Cart</button>
</div>
</div>
<div class="product_fav"><i class="fas fa-heart"></i></div>
<ul class="product_marks">
<li class="product_mark product_discount"></li>
<li class="product_mark product_new">new</li>
</ul>
</div>
</div>

<div class="arrivals_slider_item">
<div class="border_active"></div>
<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_1.jpg" alt></div>
<div class="product_content">
<div class="product_price">$225</div>
<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
<div class="product_extras">
<div class="product_color">
<input type="radio" checked name="product_color" style="background:#b19c83">
<input type="radio" name="product_color" style="background:#000000">
<input type="radio" name="product_color" style="background:#999999">
</div>
<button class="product_cart_button">Add to Cart</button>
</div>
</div>
<div class="product_fav"><i class="fas fa-heart"></i></div>
<ul class="product_marks">
<li class="product_mark product_discount"></li>
<li class="product_mark product_new">new</li>
</ul>
</div>
</div>

<div class="arrivals_slider_item">
<div class="border_active"></div>
<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_2.jpg" alt></div>
<div class="product_content">
<div class="product_price">$379</div>
<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
<div class="product_extras">
<div class="product_color">
<input type="radio" checked name="product_color" style="background:#b19c83">
<input type="radio" name="product_color" style="background:#000000">
<input type="radio" name="product_color" style="background:#999999">
</div>
<button class="product_cart_button">Add to Cart</button>
</div>
</div>
<div class="product_fav"><i class="fas fa-heart"></i></div>
<ul class="product_marks">
<li class="product_mark product_discount"></li>
<li class="product_mark product_new">new</li>
</ul>
</div>
</div>

<div class="arrivals_slider_item">
<div class="border_active"></div>
<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_3.jpg" alt></div>
<div class="product_content">
<div class="product_price">$379</div>
<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
<div class="product_extras">
<div class="product_color">
<input type="radio" checked name="product_color" style="background:#b19c83">
<input type="radio" name="product_color" style="background:#000000">
<input type="radio" name="product_color" style="background:#999999">
</div>
<button class="product_cart_button">Add to Cart</button>
</div>
</div>
<div class="product_fav"><i class="fas fa-heart"></i></div>
<ul class="product_marks">
<li class="product_mark product_discount"></li>
<li class="product_mark product_new">new</li>
</ul>
</div>
</div>

<div class="arrivals_slider_item">
<div class="border_active"></div>
<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_4.jpg" alt></div>
<div class="product_content">
<div class="product_price">$225</div>
<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
<div class="product_extras">
<div class="product_color">
<input type="radio" checked name="product_color" style="background:#b19c83">
<input type="radio" name="product_color" style="background:#000000">
<input type="radio" name="product_color" style="background:#999999">
</div>
<button class="product_cart_button">Add to Cart</button>
</div>
</div>
<div class="product_fav"><i class="fas fa-heart"></i></div>
<ul class="product_marks">
<li class="product_mark product_discount"></li>
<li class="product_mark product_new">new</li>
</ul>
</div>
</div>

<div class="arrivals_slider_item">
<div class="border_active"></div>
<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_5.jpg" alt></div>
<div class="product_content">
<div class="product_price">$225</div>
<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
<div class="product_extras">
<div class="product_color">
<input type="radio" checked name="product_color" style="background:#b19c83">
<input type="radio" name="product_color" style="background:#000000">
<input type="radio" name="product_color" style="background:#999999">
</div>
<button class="product_cart_button">Add to Cart</button>
</div>
</div>
<div class="product_fav"><i class="fas fa-heart"></i></div>
<ul class="product_marks">
<li class="product_mark product_discount"></li>
<li class="product_mark product_new">new</li>
</ul>
</div>
</div>

<div class="arrivals_slider_item">
<div class="border_active"></div>
<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_6.jpg" alt></div>
<div class="product_content">
<div class="product_price">$379</div>
<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
<div class="product_extras">
<div class="product_color">
<input type="radio" checked name="product_color" style="background:#b19c83">
<input type="radio" name="product_color" style="background:#000000">
<input type="radio" name="product_color" style="background:#999999">
</div>
<button class="product_cart_button">Add to Cart</button>
</div>
</div>
<div class="product_fav"><i class="fas fa-heart"></i></div>
<ul class="product_marks">
<li class="product_mark product_discount"></li>
<li class="product_mark product_new">new</li>
</ul>
</div>
</div>

<div class="arrivals_slider_item">
<div class="border_active"></div>
<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_7.jpg" alt></div>
<div class="product_content">
<div class="product_price">$379</div>
<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
<div class="product_extras">
<div class="product_color">
<input type="radio" checked name="product_color" style="background:#b19c83">
<input type="radio" name="product_color" style="background:#000000">
<input type="radio" name="product_color" style="background:#999999">
</div>
<button class="product_cart_button">Add to Cart</button>
</div>
</div>
<div class="product_fav"><i class="fas fa-heart"></i></div>
<ul class="product_marks">
<li class="product_mark product_discount"></li>
<li class="product_mark product_new">new</li>
</ul>
</div>
</div>

<div class="arrivals_slider_item">
<div class="border_active"></div>
<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_8.jpg" alt></div>
<div class="product_content">
<div class="product_price">$225</div>
<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
<div class="product_extras">
<div class="product_color">
<input type="radio" checked name="product_color" style="background:#b19c83">
<input type="radio" name="product_color" style="background:#000000">
<input type="radio" name="product_color" style="background:#999999">
</div>
<button class="product_cart_button">Add to Cart</button>
</div>
</div>
<div class="product_fav"><i class="fas fa-heart"></i></div>
<ul class="product_marks">
<li class="product_mark product_discount"></li>
<li class="product_mark product_new">new</li>
</ul>
</div>
</div>
</div>
<div class="arrivals_slider_dots_cover"></div>
</div>

<div class="product_panel panel">
<div class="arrivals_slider slider">

<div class="arrivals_slider_item">
<div class="border_active"></div>
<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_1.jpg" alt></div>
<div class="product_content">
<div class="product_price">$225</div>
<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
<div class="product_extras">
<div class="product_color">
<input type="radio" checked name="product_color" style="background:#b19c83">
<input type="radio" name="product_color" style="background:#000000">
<input type="radio" name="product_color" style="background:#999999">
</div>
<button class="product_cart_button">Add to Cart</button>
</div>
</div>
<div class="product_fav"><i class="fas fa-heart"></i></div>
<ul class="product_marks">
<li class="product_mark product_discount">-25%</li>
<li class="product_mark product_new">new</li>
</ul>
</div>
</div>

<div class="arrivals_slider_item">
<div class="border_active"></div>
<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_2.jpg" alt></div>
<div class="product_content">
<div class="product_price">$379</div>
<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
<div class="product_extras">
<div class="product_color">
<input type="radio" checked name="product_color" style="background:#b19c83">
<input type="radio" name="product_color" style="background:#000000">
<input type="radio" name="product_color" style="background:#999999">
</div>
<button class="product_cart_button active">Add to Cart</button>
</div>
</div>
<div class="product_fav"><i class="fas fa-heart"></i></div>
<ul class="product_marks">
<li class="product_mark product_discount"></li>
<li class="product_mark product_new">new</li>
</ul>
</div>
</div>

<div class="arrivals_slider_item">
<div class="border_active"></div>
<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_3.jpg" alt></div>
<div class="product_content">
<div class="product_price">$379</div>
<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
<div class="product_extras">
<div class="product_color">
<input type="radio" checked name="product_color" style="background:#b19c83">
<input type="radio" name="product_color" style="background:#000000">
<input type="radio" name="product_color" style="background:#999999">
</div>
<button class="product_cart_button">Add to Cart</button>
</div>
</div>
<div class="product_fav"><i class="fas fa-heart"></i></div>
<ul class="product_marks">
<li class="product_mark product_discount"></li>
<li class="product_mark product_new">new</li>
</ul>
</div>
</div>

<div class="arrivals_slider_item">
<div class="border_active"></div>
<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_4.jpg" alt></div>
<div class="product_content">
<div class="product_price">$225</div>
<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
<div class="product_extras">
<div class="product_color">
<input type="radio" checked name="product_color" style="background:#b19c83">
<input type="radio" name="product_color" style="background:#000000">
<input type="radio" name="product_color" style="background:#999999">
</div>
<button class="product_cart_button">Add to Cart</button>
</div>
</div>
<div class="product_fav"><i class="fas fa-heart"></i></div>
<ul class="product_marks">
<li class="product_mark product_discount"></li>
<li class="product_mark product_new">new</li>
</ul>
</div>
</div>

<div class="arrivals_slider_item">
<div class="border_active"></div>
<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_5.jpg" alt></div>
<div class="product_content">
<div class="product_price">$225</div>
<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
<div class="product_extras">
<div class="product_color">
<input type="radio" checked name="product_color" style="background:#b19c83">
<input type="radio" name="product_color" style="background:#000000">
<input type="radio" name="product_color" style="background:#999999">
</div>
<button class="product_cart_button">Add to Cart</button>
</div>
</div>
<div class="product_fav"><i class="fas fa-heart"></i></div>
<ul class="product_marks">
<li class="product_mark product_discount"></li>
<li class="product_mark product_new">new</li>
</ul>
</div>
</div>

<div class="arrivals_slider_item">
<div class="border_active"></div>
<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_6.jpg" alt></div>
<div class="product_content">
<div class="product_price">$379</div>
<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
<div class="product_extras">
<div class="product_color">
<input type="radio" checked name="product_color" style="background:#b19c83">
<input type="radio" name="product_color" style="background:#000000">
<input type="radio" name="product_color" style="background:#999999">
</div>
<button class="product_cart_button">Add to Cart</button>
</div>
</div>
<div class="product_fav"><i class="fas fa-heart"></i></div>
<ul class="product_marks">
<li class="product_mark product_discount"></li>
<li class="product_mark product_new">new</li>
</ul>
</div>
</div>

<div class="arrivals_slider_item">
<div class="border_active"></div>
<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_7.jpg" alt></div>
<div class="product_content">
<div class="product_price">$379</div>
<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
<div class="product_extras">
<div class="product_color">
<input type="radio" checked name="product_color" style="background:#b19c83">
<input type="radio" name="product_color" style="background:#000000">
<input type="radio" name="product_color" style="background:#999999">
</div>
<button class="product_cart_button">Add to Cart</button>
</div>
</div>
<div class="product_fav"><i class="fas fa-heart"></i></div>
<ul class="product_marks">
<li class="product_mark product_discount">-25%</li>
<li class="product_mark product_new">new</li>
</ul>
</div>
</div>

<div class="arrivals_slider_item">
<div class="border_active"></div>
<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_8.jpg" alt></div>
<div class="product_content">
<div class="product_price">$225</div>
<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
<div class="product_extras">
<div class="product_color">
<input type="radio" checked name="product_color" style="background:#b19c83">
<input type="radio" name="product_color" style="background:#000000">
<input type="radio" name="product_color" style="background:#999999">
</div>
<button class="product_cart_button">Add to Cart</button>
</div>
</div>
<div class="product_fav"><i class="fas fa-heart"></i></div>
<ul class="product_marks">
<li class="product_mark product_discount"></li>
<li class="product_mark product_new">new</li>
</ul>
</div>
</div>

<div class="arrivals_slider_item">
<div class="border_active"></div>
<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_1.jpg" alt></div>
<div class="product_content">
<div class="product_price">$225</div>
<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
<div class="product_extras">
<div class="product_color">
<input type="radio" checked name="product_color" style="background:#b19c83">
<input type="radio" name="product_color" style="background:#000000">
<input type="radio" name="product_color" style="background:#999999">
</div>
<button class="product_cart_button">Add to Cart</button>
</div>
</div>
<div class="product_fav"><i class="fas fa-heart"></i></div>
<ul class="product_marks">
<li class="product_mark product_discount"></li>
<li class="product_mark product_new">new</li>
</ul>
</div>
</div>

<div class="arrivals_slider_item">
<div class="border_active"></div>
<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_2.jpg" alt></div>
<div class="product_content">
<div class="product_price">$379</div>
<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
<div class="product_extras">
<div class="product_color">
<input type="radio" checked name="product_color" style="background:#b19c83">
<input type="radio" name="product_color" style="background:#000000">
<input type="radio" name="product_color" style="background:#999999">
</div>
<button class="product_cart_button">Add to Cart</button>
</div>
</div>
<div class="product_fav"><i class="fas fa-heart"></i></div>
<ul class="product_marks">
<li class="product_mark product_discount"></li>
<li class="product_mark product_new">new</li>
</ul>
</div>
</div>

<div class="arrivals_slider_item">
<div class="border_active"></div>
<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_3.jpg" alt></div>
<div class="product_content">
<div class="product_price">$379</div>
<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
<div class="product_extras">
<div class="product_color">
<input type="radio" checked name="product_color" style="background:#b19c83">
<input type="radio" name="product_color" style="background:#000000">
<input type="radio" name="product_color" style="background:#999999">
</div>
<button class="product_cart_button">Add to Cart</button>
</div>
</div>
<div class="product_fav"><i class="fas fa-heart"></i></div>
<ul class="product_marks">
<li class="product_mark product_discount"></li>
<li class="product_mark product_new">new</li>
</ul>
</div>
</div>

<div class="arrivals_slider_item">
<div class="border_active"></div>
<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_4.jpg" alt></div>
<div class="product_content">
<div class="product_price">$225</div>
<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
<div class="product_extras">
<div class="product_color">
<input type="radio" checked name="product_color" style="background:#b19c83">
<input type="radio" name="product_color" style="background:#000000">
<input type="radio" name="product_color" style="background:#999999">
</div>
<button class="product_cart_button">Add to Cart</button>
</div>
</div>
<div class="product_fav"><i class="fas fa-heart"></i></div>
<ul class="product_marks">
<li class="product_mark product_discount"></li>
<li class="product_mark product_new">new</li>
</ul>
</div>
</div>

<div class="arrivals_slider_item">
<div class="border_active"></div>
<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_5.jpg" alt></div>
<div class="product_content">
<div class="product_price">$225</div>
<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
<div class="product_extras">
<div class="product_color">
<input type="radio" checked name="product_color" style="background:#b19c83">
<input type="radio" name="product_color" style="background:#000000">
<input type="radio" name="product_color" style="background:#999999">
</div>
<button class="product_cart_button">Add to Cart</button>
</div>
</div>
<div class="product_fav"><i class="fas fa-heart"></i></div>
<ul class="product_marks">
<li class="product_mark product_discount"></li>
<li class="product_mark product_new">new</li>
</ul>
</div>
</div>

<div class="arrivals_slider_item">
<div class="border_active"></div>
<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_6.jpg" alt></div>
<div class="product_content">
<div class="product_price">$379</div>
<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
<div class="product_extras">
<div class="product_color">
<input type="radio" checked name="product_color" style="background:#b19c83">
<input type="radio" name="product_color" style="background:#000000">
<input type="radio" name="product_color" style="background:#999999">
</div>
<button class="product_cart_button">Add to Cart</button>
</div>
</div>
<div class="product_fav"><i class="fas fa-heart"></i></div>
<ul class="product_marks">
<li class="product_mark product_discount"></li>
<li class="product_mark product_new">new</li>
</ul>
</div>
</div>

<div class="arrivals_slider_item">
<div class="border_active"></div>
<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_7.jpg" alt></div>
<div class="product_content">
<div class="product_price">$379</div>
<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
<div class="product_extras">
<div class="product_color">
<input type="radio" checked name="product_color" style="background:#b19c83">
<input type="radio" name="product_color" style="background:#000000">
<input type="radio" name="product_color" style="background:#999999">
</div>
<button class="product_cart_button">Add to Cart</button>
</div>
</div>
<div class="product_fav"><i class="fas fa-heart"></i></div>
<ul class="product_marks">
<li class="product_mark product_discount"></li>
<li class="product_mark product_new">new</li>
</ul>
</div>
</div>

<div class="arrivals_slider_item">
<div class="border_active"></div>
<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_8.jpg" alt></div>
<div class="product_content">
<div class="product_price">$225</div>
<div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
<div class="product_extras">
<div class="product_color">
<input type="radio" checked name="product_color" style="background:#b19c83">
<input type="radio" name="product_color" style="background:#000000">
<input type="radio" name="product_color" style="background:#999999">
</div>
<button class="product_cart_button">Add to Cart</button>
</div>
</div>
<div class="product_fav"><i class="fas fa-heart"></i></div>
<ul class="product_marks">
<li class="product_mark product_discount"></li>
<li class="product_mark product_new">new</li>
</ul>
</div>
</div>
</div>
<div class="arrivals_slider_dots_cover"></div>
</div>
</div>
<div class="col-lg-3">
<div class="arrivals_single clearfix">
<div class="d-flex flex-column align-items-center justify-content-center">
<div class="arrivals_single_image"><img src="images/new_single.png" alt></div>
<div class="arrivals_single_content">
<div class="arrivals_single_category"><a href="#">Smartphones</a></div>
<div class="arrivals_single_name_container clearfix">
<div class="arrivals_single_name"><a href="#">LUNA Smartphone</a></div>
<div class="arrivals_single_price text-right">$379</div>
</div>
<div class="rating_r rating_r_4 arrivals_single_rating"><i></i><i></i><i></i><i></i><i></i></div>
<form action="#"><button class="arrivals_single_button">Add to Cart</button></form>
</div>
<div class="arrivals_single_fav product_fav active"><i class="fas fa-heart"></i></div>
<ul class="arrivals_single_marks product_marks">
<li class="arrivals_single_mark product_mark product_new">new</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="best_sellers">
<div class="container">
<div class="row">
<div class="col">
<div class="tabbed_container">
<div class="tabs clearfix tabs-right">
<div class="new_arrivals_title">Hot Best Sellers</div>
<ul class="clearfix">
<li class="active">Top 20</li>
<li>Audio & Video</li>
<li>Laptops & Computers</li>
</ul>
<div class="tabs_line"><span></span></div>
</div>
<div class="bestsellers_panel panel active">

<div class="bestsellers_slider slider">

<div class="bestsellers_item discount">
<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
<div class="bestsellers_image"><img src="images/best_1.png" alt></div>
<div class="bestsellers_content">
<div class="bestsellers_category"><a href="#">Headphones</a></div>
<div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a></div>
<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
<div class="bestsellers_price discount">$225<span>$300</span></div>
</div>
</div>
<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
<ul class="bestsellers_marks">
<li class="bestsellers_mark bestsellers_discount">-25%</li>
<li class="bestsellers_mark bestsellers_new">new</li>
</ul>
</div>

<div class="bestsellers_item discount">
<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
<div class="bestsellers_image"><img src="images/best_2.png" alt></div>
<div class="bestsellers_content">
<div class="bestsellers_category"><a href="#">Headphones</a></div>
<div class="bestsellers_name"><a href="product.html">Samsung J730F...</a></div>
<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
<div class="bestsellers_price discount">$225<span>$300</span></div>
</div>
</div>
<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
<ul class="bestsellers_marks">
<li class="bestsellers_mark bestsellers_discount">-25%</li>
<li class="bestsellers_mark bestsellers_new">new</li>
</ul>
</div>

<div class="bestsellers_item">
<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
<div class="bestsellers_image"><img src="images/best_3.png" alt></div>
<div class="bestsellers_content">
<div class="bestsellers_category"><a href="#">Headphones</a></div>
<div class="bestsellers_name"><a href="product.html">Nomi Black White</a></div>
<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
<div class="bestsellers_price discount">$225<span>$300</span></div>
</div>
</div>
<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
<ul class="bestsellers_marks">
<li class="bestsellers_mark bestsellers_discount">-25%</li>
<li class="bestsellers_mark bestsellers_new">new</li>
</ul>
</div>

<div class="bestsellers_item">
<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
<div class="bestsellers_image"><img src="images/best_4.png" alt></div>
<div class="bestsellers_content">
<div class="bestsellers_category"><a href="#">Headphones</a></div>
<div class="bestsellers_name"><a href="product.html">Samsung Charm Gold</a></div>
<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
<div class="bestsellers_price discount">$225<span>$300</span></div>
</div>
</div>
<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
<ul class="bestsellers_marks">
<li class="bestsellers_mark bestsellers_discount">-25%</li>
<li class="bestsellers_mark bestsellers_new">new</li>
</ul>
</div>

<div class="bestsellers_item discount">
<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
<div class="bestsellers_image"><img src="images/best_5.png" alt></div>
<div class="bestsellers_content">
<div class="bestsellers_category"><a href="#">Headphones</a></div>
<div class="bestsellers_name"><a href="product.html">Beoplay H7</a></div>
<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
<div class="bestsellers_price discount">$225<span>$300</span></div>
</div>
</div>
<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
<ul class="bestsellers_marks">
<li class="bestsellers_mark bestsellers_discount">-25%</li>
<li class="bestsellers_mark bestsellers_new">new</li>
</ul>
</div>

<div class="bestsellers_item">
<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
<div class="bestsellers_image"><img src="images/best_6.png" alt></div>
<div class="bestsellers_content">
<div class="bestsellers_category"><a href="#">Headphones</a></div>
<div class="bestsellers_name"><a href="product.html">Huawei MediaPad T3</a></div>
<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
<div class="bestsellers_price discount">$225<span>$300</span></div>
</div>
</div>
<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
<ul class="bestsellers_marks">
<li class="bestsellers_mark bestsellers_discount">-25%</li>
<li class="bestsellers_mark bestsellers_new">new</li>
</ul>
</div>

<div class="bestsellers_item discount">
<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
<div class="bestsellers_image"><img src="images/best_1.png" alt></div>
<div class="bestsellers_content">
<div class="bestsellers_category"><a href="#">Headphones</a></div>
<div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a></div>
<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
<div class="bestsellers_price discount">$225<span>$300</span></div>
</div>
</div>
<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
<ul class="bestsellers_marks">
<li class="bestsellers_mark bestsellers_discount">-25%</li>
<li class="bestsellers_mark bestsellers_new">new</li>
</ul>
</div>

<div class="bestsellers_item discount">
<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
<div class="bestsellers_image"><img src="images/best_2.png" alt></div>
<div class="bestsellers_content">
<div class="bestsellers_category"><a href="#">Headphones</a></div>
<div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a></div>
<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
<div class="bestsellers_price discount">$225<span>$300</span></div>
</div>
</div>
<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
<ul class="bestsellers_marks">
<li class="bestsellers_mark bestsellers_discount">-25%</li>
<li class="bestsellers_mark bestsellers_new">new</li>
</ul>
</div>

<div class="bestsellers_item">
<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
<div class="bestsellers_image"><img src="images/best_3.png" alt></div>
<div class="bestsellers_content">
<div class="bestsellers_category"><a href="#">Headphones</a></div>
<div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a></div>
<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
<div class="bestsellers_price discount">$225<span>$300</span></div>
</div>
</div>
<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
<ul class="bestsellers_marks">
<li class="bestsellers_mark bestsellers_discount">-25%</li>
<li class="bestsellers_mark bestsellers_new">new</li>
</ul>
</div>

<div class="bestsellers_item">
<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
<div class="bestsellers_image"><img src="images/best_4.png" alt></div>
<div class="bestsellers_content">
<div class="bestsellers_category"><a href="#">Headphones</a></div>
<div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a></div>
<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
<div class="bestsellers_price discount">$225<span>$300</span></div>
</div>
</div>
<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
<ul class="bestsellers_marks">
<li class="bestsellers_mark bestsellers_discount">-25%</li>
<li class="bestsellers_mark bestsellers_new">new</li>
</ul>
</div>

<div class="bestsellers_item discount">
<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
<div class="bestsellers_image"><img src="images/best_5.png" alt></div>
<div class="bestsellers_content">
<div class="bestsellers_category"><a href="#">Headphones</a></div>
<div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a></div>
<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
<div class="bestsellers_price discount">$225<span>$300</span></div>
</div>
</div>
<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
<ul class="bestsellers_marks">
<li class="bestsellers_mark bestsellers_discount">-25%</li>
<li class="bestsellers_mark bestsellers_new">new</li>
</ul>
</div>

<div class="bestsellers_item">
<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
<div class="bestsellers_image"><img src="images/best_6.png" alt></div>
<div class="bestsellers_content">
<div class="bestsellers_category"><a href="#">Headphones</a></div>
<div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a></div>
<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
<div class="bestsellers_price discount">$225<span>$300</span></div>
</div>
</div>
<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
<ul class="bestsellers_marks">
<li class="bestsellers_mark bestsellers_discount">-25%</li>
<li class="bestsellers_mark bestsellers_new">new</li>
</ul>
</div>
</div>
</div>
<div class="bestsellers_panel panel">

<div class="bestsellers_slider slider">

<div class="bestsellers_item discount">
<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
<div class="bestsellers_image"><img src="images/best_1.png" alt></div>
<div class="bestsellers_content">
<div class="bestsellers_category"><a href="#">Headphones</a></div>
<div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a></div>
<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
<div class="bestsellers_price discount">$225<span>$300</span></div>
</div>
</div>
<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
<ul class="bestsellers_marks">
<li class="bestsellers_mark bestsellers_discount">-25%</li>
<li class="bestsellers_mark bestsellers_new">new</li>
</ul>
</div>

<div class="bestsellers_item discount">
<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
<div class="bestsellers_image"><img src="images/best_2.png" alt></div>
<div class="bestsellers_content">
<div class="bestsellers_category"><a href="#">Headphones</a></div>
<div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a></div>
<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
<div class="bestsellers_price discount">$225<span>$300</span></div>
</div>
</div>
<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
<ul class="bestsellers_marks">
<li class="bestsellers_mark bestsellers_discount">-25%</li>
<li class="bestsellers_mark bestsellers_new">new</li>
</ul>
</div>

<div class="bestsellers_item">
<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
<div class="bestsellers_image"><img src="images/best_3.png" alt></div>
<div class="bestsellers_content">
<div class="bestsellers_category"><a href="#">Headphones</a></div>
<div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a></div>
<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
<div class="bestsellers_price discount">$225<span>$300</span></div>
</div>
</div>
<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
<ul class="bestsellers_marks">
<li class="bestsellers_mark bestsellers_discount">-25%</li>
<li class="bestsellers_mark bestsellers_new">new</li>
</ul>
</div>

<div class="bestsellers_item">
<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
<div class="bestsellers_image"><img src="images/best_4.png" alt></div>
<div class="bestsellers_content">
<div class="bestsellers_category"><a href="#">Headphones</a></div>
<div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a></div>
<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
<div class="bestsellers_price discount">$225<span>$300</span></div>
</div>
</div>
<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
<ul class="bestsellers_marks">
<li class="bestsellers_mark bestsellers_discount">-25%</li>
<li class="bestsellers_mark bestsellers_new">new</li>
</ul>
</div>

<div class="bestsellers_item discount">
<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
<div class="bestsellers_image"><img src="images/best_5.png" alt></div>
<div class="bestsellers_content">
<div class="bestsellers_category"><a href="#">Headphones</a></div>
<div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a></div>
<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
<div class="bestsellers_price discount">$225<span>$300</span></div>
</div>
</div>
<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
<ul class="bestsellers_marks">
<li class="bestsellers_mark bestsellers_discount">-25%</li>
<li class="bestsellers_mark bestsellers_new">new</li>
</ul>
</div>

<div class="bestsellers_item">
<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
<div class="bestsellers_image"><img src="images/best_6.png" alt></div>
<div class="bestsellers_content">
<div class="bestsellers_category"><a href="#">Headphones</a></div>
<div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a></div>
<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
<div class="bestsellers_price discount">$225<span>$300</span></div>
</div>
</div>
<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
<ul class="bestsellers_marks">
<li class="bestsellers_mark bestsellers_discount">-25%</li>
<li class="bestsellers_mark bestsellers_new">new</li>
</ul>
</div>

<div class="bestsellers_item discount">
<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
<div class="bestsellers_image"><img src="images/best_1.png" alt></div>
<div class="bestsellers_content">
<div class="bestsellers_category"><a href="#">Headphones</a></div>
<div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a></div>
<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
<div class="bestsellers_price discount">$225<span>$300</span></div>
</div>
</div>
<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
<ul class="bestsellers_marks">
<li class="bestsellers_mark bestsellers_discount">-25%</li>
<li class="bestsellers_mark bestsellers_new">new</li>
</ul>
</div>

<div class="bestsellers_item discount">
<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
<div class="bestsellers_image"><img src="images/best_2.png" alt></div>
<div class="bestsellers_content">
<div class="bestsellers_category"><a href="#">Headphones</a></div>
<div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a></div>
<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
<div class="bestsellers_price discount">$225<span>$300</span></div>
</div>
</div>
<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
<ul class="bestsellers_marks">
<li class="bestsellers_mark bestsellers_discount">-25%</li>
<li class="bestsellers_mark bestsellers_new">new</li>
</ul>
</div>

<div class="bestsellers_item">
<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
<div class="bestsellers_image"><img src="images/best_3.png" alt></div>
<div class="bestsellers_content">
<div class="bestsellers_category"><a href="#">Headphones</a></div>
<div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a></div>
<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
<div class="bestsellers_price discount">$225<span>$300</span></div>
</div>
</div>
<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
<ul class="bestsellers_marks">
<li class="bestsellers_mark bestsellers_discount">-25%</li>
<li class="bestsellers_mark bestsellers_new">new</li>
</ul>
</div>

<div class="bestsellers_item">
<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
<div class="bestsellers_image"><img src="images/best_4.png" alt></div>
<div class="bestsellers_content">
<div class="bestsellers_category"><a href="#">Headphones</a></div>
<div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a></div>
<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
<div class="bestsellers_price discount">$225<span>$300</span></div>
</div>
</div>
<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
<ul class="bestsellers_marks">
<li class="bestsellers_mark bestsellers_discount">-25%</li>
<li class="bestsellers_mark bestsellers_new">new</li>
</ul>
</div>

<div class="bestsellers_item discount">
<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
<div class="bestsellers_image"><img src="images/best_5.png" alt></div>
<div class="bestsellers_content">
<div class="bestsellers_category"><a href="#">Headphones</a></div>
<div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a></div>
<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
<div class="bestsellers_price discount">$225<span>$300</span></div>
</div>
</div>
<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
<ul class="bestsellers_marks">
<li class="bestsellers_mark bestsellers_discount">-25%</li>
<li class="bestsellers_mark bestsellers_new">new</li>
</ul>
</div>

<div class="bestsellers_item">
<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
<div class="bestsellers_image"><img src="images/best_6.png" alt></div>
<div class="bestsellers_content">
<div class="bestsellers_category"><a href="#">Headphones</a></div>
<div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a></div>
<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
<div class="bestsellers_price discount">$225<span>$300</span></div>
</div>
</div>
<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
<ul class="bestsellers_marks">
<li class="bestsellers_mark bestsellers_discount">-25%</li>
<li class="bestsellers_mark bestsellers_new">new</li>
</ul>
</div>
</div>
</div>
<div class="bestsellers_panel panel">

<div class="bestsellers_slider slider">

<div class="bestsellers_item discount">
<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
<div class="bestsellers_image"><img src="images/best_1.png" alt></div>
<div class="bestsellers_content">
<div class="bestsellers_category"><a href="#">Headphones</a></div>
<div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a></div>
<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
<div class="bestsellers_price discount">$225<span>$300</span></div>
</div>
</div>
<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
<ul class="bestsellers_marks">
<li class="bestsellers_mark bestsellers_discount">-25%</li>
<li class="bestsellers_mark bestsellers_new">new</li>
</ul>
</div>

<div class="bestsellers_item discount">
<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
<div class="bestsellers_image"><img src="images/best_2.png" alt></div>
<div class="bestsellers_content">
<div class="bestsellers_category"><a href="#">Headphones</a></div>
<div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a></div>
<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
<div class="bestsellers_price discount">$225<span>$300</span></div>
</div>
</div>
<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
<ul class="bestsellers_marks">
<li class="bestsellers_mark bestsellers_discount">-25%</li>
<li class="bestsellers_mark bestsellers_new">new</li>
</ul>
</div>

<div class="bestsellers_item">
<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
<div class="bestsellers_image"><img src="images/best_3.png" alt></div>
<div class="bestsellers_content">
<div class="bestsellers_category"><a href="#">Headphones</a></div>
<div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a></div>
<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
<div class="bestsellers_price discount">$225<span>$300</span></div>
</div>
</div>
<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
<ul class="bestsellers_marks">
<li class="bestsellers_mark bestsellers_discount">-25%</li>
<li class="bestsellers_mark bestsellers_new">new</li>
</ul>
</div>

<div class="bestsellers_item">
<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
<div class="bestsellers_image"><img src="images/best_4.png" alt></div>
<div class="bestsellers_content">
<div class="bestsellers_category"><a href="#">Headphones</a></div>
<div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a></div>
<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
<div class="bestsellers_price discount">$225<span>$300</span></div>
</div>
</div>
<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
<ul class="bestsellers_marks">
<li class="bestsellers_mark bestsellers_discount">-25%</li>
<li class="bestsellers_mark bestsellers_new">new</li>
</ul>
</div>

<div class="bestsellers_item discount">
<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
<div class="bestsellers_image"><img src="images/best_5.png" alt></div>
<div class="bestsellers_content">
<div class="bestsellers_category"><a href="#">Headphones</a></div>
<div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a></div>
<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
<div class="bestsellers_price discount">$225<span>$300</span></div>
</div>
</div>
<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
<ul class="bestsellers_marks">
<li class="bestsellers_mark bestsellers_discount">-25%</li>
<li class="bestsellers_mark bestsellers_new">new</li>
</ul>
</div>

<div class="bestsellers_item">
<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
<div class="bestsellers_image"><img src="images/best_6.png" alt></div>
<div class="bestsellers_content">
<div class="bestsellers_category"><a href="#">Headphones</a></div>
<div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a></div>
<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
<div class="bestsellers_price discount">$225<span>$300</span></div>
</div>
</div>
<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
<ul class="bestsellers_marks">
<li class="bestsellers_mark bestsellers_discount">-25%</li>
<li class="bestsellers_mark bestsellers_new">new</li>
</ul>
</div>

<div class="bestsellers_item discount">
<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
<div class="bestsellers_image"><img src="images/best_1.png" alt></div>
<div class="bestsellers_content">
<div class="bestsellers_category"><a href="#">Headphones</a></div>
<div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a></div>
<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
<div class="bestsellers_price discount">$225<span>$300</span></div>
</div>
</div>
<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
<ul class="bestsellers_marks">
<li class="bestsellers_mark bestsellers_discount">-25%</li>
<li class="bestsellers_mark bestsellers_new">new</li>
</ul>
</div>

<div class="bestsellers_item discount">
<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
<div class="bestsellers_image"><img src="images/best_2.png" alt></div>
<div class="bestsellers_content">
<div class="bestsellers_category"><a href="#">Headphones</a></div>
<div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a></div>
<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
<div class="bestsellers_price discount">$225<span>$300</span></div>
</div>
</div>
<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
<ul class="bestsellers_marks">
<li class="bestsellers_mark bestsellers_discount">-25%</li>
<li class="bestsellers_mark bestsellers_new">new</li>
</ul>
</div>

<div class="bestsellers_item">
<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
<div class="bestsellers_image"><img src="images/best_3.png" alt></div>
<div class="bestsellers_content">
<div class="bestsellers_category"><a href="#">Headphones</a></div>
<div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a></div>
<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
<div class="bestsellers_price discount">$225<span>$300</span></div>
</div>
</div>
<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
<ul class="bestsellers_marks">
<li class="bestsellers_mark bestsellers_discount">-25%</li>
<li class="bestsellers_mark bestsellers_new">new</li>
</ul>
</div>

<div class="bestsellers_item">
<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
<div class="bestsellers_image"><img src="images/best_4.png" alt></div>
<div class="bestsellers_content">
<div class="bestsellers_category"><a href="#">Headphones</a></div>
<div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a></div>
<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
<div class="bestsellers_price discount">$225<span>$300</span></div>
</div>
</div>
<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
<ul class="bestsellers_marks">
<li class="bestsellers_mark bestsellers_discount">-25%</li>
<li class="bestsellers_mark bestsellers_new">new</li>
</ul>
</div>

<div class="bestsellers_item discount">
<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
<div class="bestsellers_image"><img src="images/best_5.png" alt></div>
<div class="bestsellers_content">
<div class="bestsellers_category"><a href="#">Headphones</a></div>
<div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a></div>
<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
<div class="bestsellers_price discount">$225<span>$300</span></div>
</div>
</div>
<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
<ul class="bestsellers_marks">
<li class="bestsellers_mark bestsellers_discount">-25%</li>
<li class="bestsellers_mark bestsellers_new">new</li>
</ul>
</div>

<div class="bestsellers_item">
<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
<div class="bestsellers_image"><img src="images/best_6.png" alt></div>
<div class="bestsellers_content">
<div class="bestsellers_category"><a href="#">Headphones</a></div>
<div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a></div>
<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
<div class="bestsellers_price discount">$225<span>$300</span></div>
</div>
</div>
<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
<ul class="bestsellers_marks">
<li class="bestsellers_mark bestsellers_discount">-25%</li>
<li class="bestsellers_mark bestsellers_new">new</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="adverts">
<div class="container">
<div class="row">
<div class="col-lg-4 advert_col">

<div class="advert d-flex flex-row align-items-center justify-content-start">
<div class="advert_content">
<div class="advert_title"><a href="#">Trends 2018</a></div>
<div class="advert_text">Lorem ipsum dolor sit amet, consectetur adipiscing Donec et.</div>
</div>
<div class="ml-auto"><div class="advert_image"><img src="images/adv_1.png" alt></div></div>
</div>
</div>
<div class="col-lg-4 advert_col">

<div class="advert d-flex flex-row align-items-center justify-content-start">
<div class="advert_content">
<div class="advert_subtitle">Trends 2018</div>
<div class="advert_title_2"><a href="#">Sale -45%</a></div>
<div class="advert_text">Lorem ipsum dolor sit amet, consectetur.</div>
</div>
<div class="ml-auto"><div class="advert_image"><img src="images/adv_2.png" alt></div></div>
</div>
</div>
<div class="col-lg-4 advert_col">

<div class="advert d-flex flex-row align-items-center justify-content-start">
<div class="advert_content">
<div class="advert_title"><a href="#">Trends 2018</a></div>
<div class="advert_text">Lorem ipsum dolor sit amet, consectetur.</div>
</div>
<div class="ml-auto"><div class="advert_image"><img src="images/adv_3.png" alt></div></div>
</div>
</div>
</div>
</div>
</div>

<div class="trends">
<div class="trends_background" style="background-image:url(images/trends_background.jpg)"></div>
<div class="trends_overlay"></div>
<div class="container">
<div class="row">

<div class="col-lg-3">
<div class="trends_container">
<h2 class="trends_title">Trends 2018</h2>
<div class="trends_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing Donec et.</p></div>
<div class="trends_slider_nav">
<div class="trends_prev trends_nav"><i class="fas fa-angle-left ml-auto"></i></div>
<div class="trends_next trends_nav"><i class="fas fa-angle-right ml-auto"></i></div>
</div>
</div>
</div>

<div class="col-lg-9">
<div class="trends_slider_container">

<div class="owl-carousel owl-theme trends_slider">

<div class="owl-item">
<div class="trends_item is_new">
<div class="trends_image d-flex flex-column align-items-center justify-content-center"><img src="images/trends_1.jpg" alt></div>
<div class="trends_content">
<div class="trends_category"><a href="#">Smartphones</a></div>
<div class="trends_info clearfix">
<div class="trends_name"><a href="product.html">Jump White</a></div>
<div class="trends_price">$379</div>
</div>
</div>
<ul class="trends_marks">
<li class="trends_mark trends_discount">-25%</li>
<li class="trends_mark trends_new">new</li>
</ul>
<div class="trends_fav"><i class="fas fa-heart"></i></div>
</div>
</div>

<div class="owl-item">
<div class="trends_item">
<div class="trends_image d-flex flex-column align-items-center justify-content-center"><img src="images/trends_2.jpg" alt></div>
<div class="trends_content">
<div class="trends_category"><a href="#">Smartphones</a></div>
<div class="trends_info clearfix">
<div class="trends_name"><a href="product.html">Samsung Charm...</a></div>
<div class="trends_price">$379</div>
</div>
</div>
<ul class="trends_marks">
<li class="trends_mark trends_discount">-25%</li>
<li class="trends_mark trends_new">new</li>
</ul>
<div class="trends_fav"><i class="fas fa-heart"></i></div>
</div>
</div>

<div class="owl-item">
<div class="trends_item is_new">
<div class="trends_image d-flex flex-column align-items-center justify-content-center"><img src="images/trends_3.jpg" alt></div>
<div class="trends_content">
<div class="trends_category"><a href="#">Smartphones</a></div>
<div class="trends_info clearfix">
<div class="trends_name"><a href="product.html">DJI Phantom 3...</a></div>
<div class="trends_price">$379</div>
</div>
</div>
<ul class="trends_marks">
<li class="trends_mark trends_discount">-25%</li>
<li class="trends_mark trends_new">new</li>
</ul>
<div class="trends_fav"><i class="fas fa-heart"></i></div>
</div>
</div>

<div class="owl-item">
<div class="trends_item is_new">
<div class="trends_image d-flex flex-column align-items-center justify-content-center"><img src="images/trends_1.jpg" alt></div>
<div class="trends_content">
<div class="trends_category"><a href="#">Smartphones</a></div>
<div class="trends_info clearfix">
<div class="trends_name"><a href="product.html">Jump White</a></div>
<div class="trends_price">$379</div>
</div>
</div>
<ul class="trends_marks">
<li class="trends_mark trends_discount">-25%</li>
<li class="trends_mark trends_new">new</li>
</ul>
<div class="trends_fav"><i class="fas fa-heart"></i></div>
</div>
</div>

<div class="owl-item">
<div class="trends_item">
<div class="trends_image d-flex flex-column align-items-center justify-content-center"><img src="images/trends_2.jpg" alt></div>
<div class="trends_content">
<div class="trends_category"><a href="#">Smartphones</a></div>
<div class="trends_info clearfix">
<div class="trends_name"><a href="product.html">Jump White</a></div>
<div class="trends_price">$379</div>
</div>
</div>
<ul class="trends_marks">
<li class="trends_mark trends_discount">-25%</li>
<li class="trends_mark trends_new">new</li>
</ul>
<div class="trends_fav"><i class="fas fa-heart"></i></div>
</div>
</div>

<div class="owl-item">
<div class="trends_item is_new">
<div class="trends_image d-flex flex-column align-items-center justify-content-center"><img src="images/trends_3.jpg" alt></div>
<div class="trends_content">
<div class="trends_category"><a href="#">Smartphones</a></div>
<div class="trends_info clearfix">
<div class="trends_name"><a href="product.html">Jump White</a></div>
<div class="trends_price">$379</div>
</div>
</div>
<ul class="trends_marks">
<li class="trends_mark trends_discount">-25%</li>
<li class="trends_mark trends_new">new</li>
</ul>
<div class="trends_fav"><i class="fas fa-heart"></i></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="reviews">
<div class="container">
<div class="row">
<div class="col">
<div class="reviews_title_container">
<h3 class="reviews_title">Latest Reviews</h3>
<div class="reviews_all ml-auto"><a href="#">view all <span>reviews</span></a></div>
</div>
<div class="reviews_slider_container">

<div class="owl-carousel owl-theme reviews_slider">

<div class="owl-item">
<div class="review d-flex flex-row align-items-start justify-content-start">
<div><div class="review_image"><img src="images/review_1.jpg" alt></div></div>
<div class="review_content">
<div class="review_name">Roberto Sanchez</div>
<div class="review_rating_container">
<div class="rating_r rating_r_4 review_rating"><i></i><i></i><i></i><i></i><i></i></div>
<div class="review_time">2 day ago</div>
</div>
<div class="review_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</p></div>
</div>
</div>
</div>

<div class="owl-item">
<div class="review d-flex flex-row align-items-start justify-content-start">
<div><div class="review_image"><img src="images/review_2.jpg" alt></div></div>
<div class="review_content">
<div class="review_name">Brandon Flowers</div>
<div class="review_rating_container">
<div class="rating_r rating_r_4 review_rating"><i></i><i></i><i></i><i></i><i></i></div>
<div class="review_time">2 day ago</div>
</div>
<div class="review_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</p></div>
</div>
</div>
</div>

<div class="owl-item">
<div class="review d-flex flex-row align-items-start justify-content-start">
<div><div class="review_image"><img src="images/review_3.jpg" alt></div></div>
<div class="review_content">
<div class="review_name">Emilia Clarke</div>
<div class="review_rating_container">
<div class="rating_r rating_r_4 review_rating"><i></i><i></i><i></i><i></i><i></i></div>
<div class="review_time">2 day ago</div>
</div>
<div class="review_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</p></div>
</div>
</div>
</div>

<div class="owl-item">
<div class="review d-flex flex-row align-items-start justify-content-start">
<div><div class="review_image"><img src="images/review_1.jpg" alt></div></div>
<div class="review_content">
<div class="review_name">Roberto Sanchez</div>
<div class="review_rating_container">
<div class="rating_r rating_r_4 review_rating"><i></i><i></i><i></i><i></i><i></i></div>
<div class="review_time">2 day ago</div>
</div>
<div class="review_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</p></div>
</div>
</div>
</div>

<div class="owl-item">
<div class="review d-flex flex-row align-items-start justify-content-start">
<div><div class="review_image"><img src="images/review_2.jpg" alt></div></div>
<div class="review_content">
<div class="review_name">Brandon Flowers</div>
<div class="review_rating_container">
<div class="rating_r rating_r_4 review_rating"><i></i><i></i><i></i><i></i><i></i></div>
<div class="review_time">2 day ago</div>
</div>
<div class="review_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</p></div>
</div>
</div>
</div>

<div class="owl-item">
<div class="review d-flex flex-row align-items-start justify-content-start">
<div><div class="review_image"><img src="images/review_3.jpg" alt></div></div>
<div class="review_content">
<div class="review_name">Emilia Clarke</div>
<div class="review_rating_container">
<div class="rating_r rating_r_4 review_rating"><i></i><i></i><i></i><i></i><i></i></div>
<div class="review_time">2 day ago</div>
</div>
<div class="review_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</p></div>
</div>
</div>
</div>
</div>
<div class="reviews_dots"></div>
</div>
</div>
</div>
</div>
</div>

<div class="viewed">
<div class="container">
<div class="row">
<div class="col">
<div class="viewed_title_container">
<h3 class="viewed_title">Recently Viewed</h3>
<div class="viewed_nav_container">
<div class="viewed_nav viewed_prev"><i class="fas fa-chevron-left"></i></div>
<div class="viewed_nav viewed_next"><i class="fas fa-chevron-right"></i></div>
</div>
</div>
<div class="viewed_slider_container">

<div class="owl-carousel owl-theme viewed_slider">

<div class="owl-item">
<div class="viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
<div class="viewed_image"><img src="images/view_1.jpg" alt></div>
<div class="viewed_content text-center">
<div class="viewed_price">$225<span>$300</span></div>
<div class="viewed_name"><a href="#">Beoplay H7</a></div>
</div>
<ul class="item_marks">
<li class="item_mark item_discount">-25%</li>
<li class="item_mark item_new">new</li>
</ul>
</div>
</div>

<div class="owl-item">
<div class="viewed_item d-flex flex-column align-items-center justify-content-center text-center">
<div class="viewed_image"><img src="images/view_2.jpg" alt></div>
<div class="viewed_content text-center">
<div class="viewed_price">$379</div>
<div class="viewed_name"><a href="#">LUNA Smartphone</a></div>
</div>
<ul class="item_marks">
<li class="item_mark item_discount">-25%</li>
<li class="item_mark item_new">new</li>
</ul>
</div>
</div>

<div class="owl-item">
<div class="viewed_item d-flex flex-column align-items-center justify-content-center text-center">
<div class="viewed_image"><img src="images/view_3.jpg" alt></div>
<div class="viewed_content text-center">
<div class="viewed_price">$225</div>
<div class="viewed_name"><a href="#">Samsung J730F...</a></div>
</div>
<ul class="item_marks">
<li class="item_mark item_discount">-25%</li>
<li class="item_mark item_new">new</li>
</ul>
</div>
</div>

<div class="owl-item">
<div class="viewed_item is_new d-flex flex-column align-items-center justify-content-center text-center">
<div class="viewed_image"><img src="images/view_4.jpg" alt></div>
<div class="viewed_content text-center">
<div class="viewed_price">$379</div>
<div class="viewed_name"><a href="#">Huawei MediaPad...</a></div>
</div>
<ul class="item_marks">
<li class="item_mark item_discount">-25%</li>
<li class="item_mark item_new">new</li>
</ul>
</div>
</div>

<div class="owl-item">
<div class="viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
<div class="viewed_image"><img src="images/view_5.jpg" alt></div>
<div class="viewed_content text-center">
<div class="viewed_price">$225<span>$300</span></div>
<div class="viewed_name"><a href="#">Sony PS4 Slim</a></div>
</div>
<ul class="item_marks">
<li class="item_mark item_discount">-25%</li>
<li class="item_mark item_new">new</li>
</ul>
</div>
</div>

<div class="owl-item">
<div class="viewed_item d-flex flex-column align-items-center justify-content-center text-center">
<div class="viewed_image"><img src="images/view_6.jpg" alt></div>
<div class="viewed_content text-center">
<div class="viewed_price">$375</div>
<div class="viewed_name"><a href="#">Speedlink...</a></div>
</div>
<ul class="item_marks">
<li class="item_mark item_discount">-25%</li>
<li class="item_mark item_new">new</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="brands">
<div class="container">
<div class="row">
<div class="col">
<div class="brands_slider_container">

<div class="owl-carousel owl-theme brands_slider">
<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_1.jpg" alt></div></div>
<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_2.jpg" alt></div></div>
<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_3.jpg" alt></div></div>
<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_4.jpg" alt></div></div>
<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_5.jpg" alt></div></div>
<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_6.jpg" alt></div></div>
<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_7.jpg" alt></div></div>
<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_8.jpg" alt></div></div>
</div>

<div class="brands_nav brands_prev"><i class="fas fa-chevron-left"></i></div>
<div class="brands_nav brands_next"><i class="fas fa-chevron-right"></i></div>
</div>
</div>
</div>
</div>
</div>

<div class="newsletter">
<div class="container">
<div class="row">
<div class="col">
<div class="newsletter_container d-flex flex-lg-row flex-column align-items-lg-center align-items-center justify-content-lg-start justify-content-center">
<div class="newsletter_title_container">
<div class="newsletter_icon"><img src="images/send.png" alt></div>
<div class="newsletter_title">Sign up for Newsletter</div>
<div class="newsletter_text"><p>...and receive %20 coupon for first shopping.</p></div>
</div>
<div class="newsletter_content clearfix">
<form action="#" class="newsletter_form">
<input type="email" class="newsletter_input" required="required" placeholder="Enter your email address">
<button class="newsletter_button">Subscribe</button>
</form>
<div class="newsletter_unsubscribe_link"><a href="#">unsubscribe</a></div>
</div>
</div>
</div>
</div>
</div>
</div>





<div class="copyright">
<div class="container">
<div class="row">
<div class="col">
<div class="copyright_container d-flex flex-sm-row flex-column align-items-center justify-content-start">
<div class="copyright_content">
Copyright &copy;<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>

</div>
<div class="logos ml-sm-auto">
<ul class="logos_list">
<li><a href="#"><img src="images/logos_1.png" alt></a></li>
<li><a href="#"><img src="images/logos_2.png" alt></a></li>
<li><a href="#"><img src="images/logos_3.png" alt></a></li>
<li><a href="#"><img src="images/logos_4.png" alt></a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


@endsection
