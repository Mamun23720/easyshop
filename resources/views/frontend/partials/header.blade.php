<header>


<!-- Top Bar -->

<div class="top_bar">
<div style="padding: 0px;" class="container">
<div class="row">
<div class="col d-flex flex-row">
<div class="top_bar_contact_item"><div class="top_bar_icon"><img src="https://preview.colorlib.com/theme/onetech/images/phone.png" alt=""></div>01627736636</div>
<div class="top_bar_contact_item"><div class="top_bar_icon"><img src="https://preview.colorlib.com/theme/onetech/images/mail.png" alt=""></div><a href="#">sajib@gmail.com</a></div>
<div class="top_bar_content ml-auto">
<div class="top_bar_menu">
<ul class="standard_dropdown top_bar_dropdown">
<li>
<a href="#">English<i class="fas fa-chevron-down"></i></a>
<ul>
<li><a href="#">Bangla</a></li>
</ul>
</li>
<li>
<a href="#">BDT<i class="fas fa-chevron-down"></i></a>
<ul>
<li><a href="#">USD</a></li>
<li><a href="#">EUR</a></li>
</ul>
</li>
</ul>
</div>

@guest('customerGuard')

<div class="top_bar_user">
<div class="user_icon"><img src="https://preview.colorlib.com/theme/onetech/images/user.svg" alt=""></div>
<div><a href="{{route('frontend.user.registration')}}">Register</a></div>
<div><a href="{{route('frontend.user.login')}}">Sign in</a></div>
</div>

@endguest

@auth('customerGuard')

<div class="top_bar_user">
<div ><a href="{{route('view.profile')}}"><img src="{{url('/uploads/customerRegistration/'. auth('customerGuard')->user()->image)}}" alt="" width="40" height="40" class="rounded-circle me-5"></a></div>
<div><a href="{{route('view.profile')}}"><b>{{auth('customerGuard')->user()->name}}</b></a></div>
<div><a href="{{route('frontend.logout')}}">Sign Out</a></div>
</div>

@endauth


</div>
</div>
</div>
</div>
</div>

<!-- Top Bar -->


<!-- Middle Bar -->

<div class="header_main">
<div class="container">
<div class="row">

<div class="col-lg-2 col-sm-3 col-3 order-1">
<div class="logo_container">
<div class="logo"><a href="/">S-Shop</a></div>
</div>
</div>

<div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
<div class="header_search">
<div class="header_search_content">
<div class="header_search_form_container">
<form action="{{route('search')}}" class="header_search_form clearfix">
<input name="search_key" style="width: 100%; height: 100%" value="{{request()->search_key}}" type="text" class="header_search_input" placeholder="Search for products...">
<button style="width: 100px; height: 48px; " type="submit" class="header_search_button trans_300" value="Submit"><b>Search</b></button>
</form>
</div>
</div>
</div>
</div>

<div class="col-lg-4 col-9 order-lg-3 order-2 text-lg-left text-right">
<div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">
<div class="wishlist d-flex flex-row align-items-center justify-content-end">
<div class="wishlist_icon">
    <svg width="20px" height="18px" class="mt-[3px]" viewBox="0 0 21 18" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M4.97214 0.0251923C3.71435 0.183434 2.6616 0.701674 1.7705 1.60365C0.970091 2.41068 0.489057 3.26519 0.213053 4.37683C-0.275867 6.30342 0.0789948 8.20232 1.25398 9.98649C2.00708 11.1298 2.98097 12.1781 4.76711 13.7764C5.90266 14.7931 9.36848 17.7601 9.53802 17.859C9.69574 17.954 9.75488 17.9658 10.09 17.9658C10.4252 17.9658 10.4843 17.954 10.642 17.859C10.8116 17.7601 14.2853 14.7891 15.413 13.7764C17.207 12.1702 18.173 11.1258 18.9261 9.98649C20.1011 8.20232 20.4559 6.30342 19.967 4.37683C19.691 3.26519 19.21 2.41068 18.4096 1.60365C17.6131 0.800575 16.7614 0.337719 15.6456 0.100357C15.0857 -0.0183239 14.0526 -0.0301933 13.5637 0.0805759C12.1995 0.377279 11.1546 1.06167 10.2004 2.28013L10.09 2.41859L9.98357 2.28013C9.04122 1.08541 8.01212 0.401016 6.69913 0.100357C6.30878 0.00936699 5.4098 -0.0301933 4.97214 0.0251923ZM6.28907 1.23178C7.40885 1.42958 8.37487 2.07837 9.13979 3.15046C9.26991 3.3364 9.43156 3.55793 9.49465 3.64892C9.78643 4.06035 10.3936 4.06035 10.6854 3.64892C10.7485 3.55793 10.9102 3.3364 11.0403 3.15046C12.0851 1.68673 13.5401 0.998377 15.1251 1.21596C16.8837 1.45728 18.2558 2.69156 18.7802 4.50738C19.1942 5.94342 19.0128 7.45067 18.2597 8.80759C17.6289 9.94298 16.5761 11.1337 14.7427 12.7834C13.8555 13.5786 10.1255 16.7988 10.09 16.7988C10.0506 16.7988 6.33638 13.5904 5.4374 12.7834C2.61823 10.2476 1.50633 8.66518 1.23821 6.8098C1.06472 5.61112 1.31312 4.32145 1.91639 3.30475C2.82326 1.77376 4.58968 0.935081 6.28907 1.23178Z" fill="black"></path>
    </svg>
</div>
<div class="wishlist_content">
<div class="wishlist_text"><a href="#">Wishlist</a></div>
<div class="wishlist_count">0 item</div>
</div>
</div>

<div class="cart">
<div class="cart_container d-flex flex-row align-items-center justify-content-end">
<div class="cart_icon">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="" stroke="currentColor" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z">
        </path>
    </svg>
</div>
<div class="cart_content">
<div class="cart_text"><a href="{{route('view.cart')}}">Cart</a></div>
<div class="cart_price">

@if ($myCart=session()->get('basket'))


{{array_sum(array_column(session()->get('basket'),'subtotal')) }} item

@else

00 BDT

@endif
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<!-- Middle Bar -->


<!-- Nav Bar -->

<nav class="main_nav">
<div class="container">
<div class="row">
<div class="col">
<div class="main_nav_content d-flex flex-row">
<div>
<ul class="standard_dropdown main_nav_dropdown">
<li><a href="/"><b style="color: black; " >Home</b><i class="fas fa-chevron-down"></i></a></li>
<li><a href="#"><b style="color: black;" >Hot Offers</b><i class="fas fa-chevron-down"></i></a></li>
<li><a href="{{route('frontend.product')}}"><b style="color: black;" >All Products</b><i class="fas fa-chevron-down"></i></a></li>
<li><a href="#"><b style="color: black;" >All Categories</b><i class="fas fa-chevron-down"></i></a></li>
<li><a href="#"><b style="color: black;" >New Products</b><i class="fas fa-chevron-down"></i></a></li>
<li><a href="#"><b style="color: black;" >Super Deals</b><i class="fas fa-chevron-down"></i></a></li>
<li><a href="#"><b style="color: black;" >Pages</b><i class="fas fa-chevron-down"></i></a></li>
<li><a href="#"><b style="color: black;" >Blog</b><i class="fas fa-chevron-down"></i></a></li>
<li><a href="#"><b style="color: black;" >Contact</b><i class="fas fa-chevron-down"></i></a></li>
</ul>
</div>

</div>
</div>
</div>
</div>
</nav>

<!-- Nav Bar -->


</header>
