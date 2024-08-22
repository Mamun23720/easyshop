<header>


<!-- Top Bar -->

<div class="top_bar">
<div class="container">
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
<div class="wishlist_icon"><img src="https://preview.colorlib.com/theme/onetech/images/heart.png" alt></div>
<div class="wishlist_content">
<div class="wishlist_text"><a href="#">Wishlist</a></div>
<div class="wishlist_count">0 item</div>
</div>
</div>

<div class="cart">
<div class="cart_container d-flex flex-row align-items-center justify-content-end">
<div class="cart_icon">
<img src="https://preview.colorlib.com/theme/onetech/images/cart.png" alt>
<div class="cart_count"><span>{{session()->has('basket') ? count(session()->get('basket')) : 0}}</span></div>
</div>
<div class="cart_content">
<div class="cart_text"><a href="{{route('view.cart')}}">Cart</a></div>
<div class="cart_price">

@if ($myCart=session()->get('basket'))


{{array_sum(array_column(session()->get('basket'),'subtotal')) }} BDT

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
<div class="menu_trigger_container ml-auto">
<div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
<div class="menu_burger">
<div class="menu_trigger_text">menu</div>
<div class="cat_burger menu_burger_inner"><span></span><span></span><span></span></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</nav>

<!-- Nav Bar -->


</header>