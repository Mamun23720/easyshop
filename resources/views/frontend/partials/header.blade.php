<header>


    <!-- Top Bar -->

    <div class="top_bar">
        <div style="padding: 0px;" class="flex-container">
            <div  class="row">
                <div style="color: black" class="col d-flex flex-row">
                    <div style="font-size:20px;" class="top_bar_contact_item ml-5">
                        <div  class="top_bar_icon"></div>Helpline: 01627736636
                    </div>
                    <div  class="top_bar_contact_item">
                        <div class="top_bar_icon"></div><a style="font-size:20px; color:black;" href="#">E-mail: sajib@gmail.com</a>
                    </div>
                    <div class="top_bar_content ml-auto">


                        @guest('customerGuard')
                            <div class="top_bar_user mr-5">
                                <div class="user_icon"></div>
                                <div><a style="font-size:20px; color:black;" href="{{ route('frontend.user.registration') }}"><b>Register</b></a></div>
                                <div><a style="font-size:20px; color:black;" href="{{ route('frontend.user.login') }}"><b>Sign in</b></a></div>
                            </div>
                        @endguest

                        @auth('customerGuard')
                            <div class="top_bar_user mr-5">
                                <div class="user_icon"></div>
                                <div><a style="font-size:20px; color:black;"
                                        href="{{ route('view.profile') }}"><b>{{ auth('customerGuard')->user()->name }}</b></a>
                                </div>
                                <div><a style="font-size:20px; color:black;" href="{{ route('frontend.logout') }}">Sign Out</a></div>
                            </div>
                        @endauth


                        <div class="top_bar_menu ml-5 mr-5">
                            <ul class="standard_dropdown top_bar_dropdown">
                                <li>
                                    <a style="font-size:20px; color:black;" href="#">English<i class="fas fa-chevron-down"></i></a>
                                    <ul>
                                        <li><a style="font-size:20px; color:black;" href="#">Bangla</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a style="font-size:20px; color:black;" href="#">BDT<i class="fas fa-chevron-down"></i></a>
                                    <ul>
                                        <li><a style="font-size:20px; color:black;" href="#">USD</a></li>
                                        <li><a style="font-size:20px; color:black;" href="#">EUR</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Top Bar -->


    <!-- Middle Bar -->

    <div class="header_main">
        <div style=" height: 170px;" class="flex-container ml-5 mr-5">
            <div class="row">

                <div class="col-md-4">
                    <div class="logo_container">
                        <div class="logo">
                            <a href="/">
                                <img style="height: 100px; width: 300px; border-radius: 10%; margin-left: 25%;" src="{{url('/uploads/important/Logo.JPG')}}" alt="S-Shop">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="header_search">
                        <div class="header_search_content">
                            <div class="header_search_form_container">
                                <form action="{{ route('search') }}" class="header_search_form clearfix">
                                    <input name="search_key" style="width: 100%; height: 100%"
                                        value="{{ request()->search_key }}" type="text" class="header_search_input"
                                        placeholder="Search here...">
                                    <button style="width: 100px; height: 48px; " type="submit" class="header_search_button trans_300" value="Submit">
                                        <b style="color: white; font-size:20px; " >Search</b>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="wishlist_cart d-flex flex-row align-items-center justify-content-center">
                        <div class="wishlist d-flex flex-row align-items-center justify-content-center">
                            <div class="wishlist_icon">
                                <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                        fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                        <path
                                            d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15" />
                                    </svg></a>
                            </div>
                            <div class="wishlist_content">
                                <div class="wishlist_text"><a href="#"><b>Wishlist</b></a></div>
                                <div class="wishlist_count">0 item</div>
                            </div>
                        </div>

                        <div class="cart">
                            <div class="cart_container d-flex flex-row align-items-center justify-content-center">
                                <div class="cart_icon">
                                    <a href="{{ route('view.cart') }}"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="40" height="40" fill="currentColor" class="bi bi-cart4"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l.5 2H5V5zM6 5v2h2V5zm3 0v2h2V5zm3 0v2h1.36l.5-2zm1.11 3H12v2h.61zM11 8H9v2h2zM8 8H6v2h2zM5 8H3.89l.5 2H5zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0" />
                                        </svg></a>
                                    <div class="cart_count"><a
                                            href=""><span>{{ session()->has('basket') ? count(session()->get('basket')) : 0 }}</span></a>
                                    </div>
                                </div>
                                <div class="cart_content">
                                    <div class="cart_text"><a href="{{ route('view.cart') }}"><b>Cart</b></a></div>
                                    <div class="cart_price">

                                        @if ($myCart = session()->get('basket'))
                                            {{ array_sum(array_column(session()->get('basket'), 'subtotal')) }} BDT
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

                                <li><a href="/"><b style="color: black; font-size: 24px">Home</b><i
                                            class="fas fa-chevron-down"></i></a></li>
                                <li><a href="#"><b style="color: black;font-size: 24px">Hot Offers</b><i
                                            class="fas fa-chevron-down"></i></a></li>
                                <li><a href="{{ route('frontend.product') }}"><b style="color: black;font-size: 24px">Products</b><i 
                                            class="fas fa-chevron-down"></i></a></li>
                                <li><a href="#"><b style="color: black;font-size: 24px">New Products</b><i
                                            class="fas fa-chevron-down"></i></a></li>
                                <li><a href="#"><b style="color: black;font-size: 24px">Super Deals</b><i
                                            class="fas fa-chevron-down"></i></a></li>
                                <li><a href="#"><b style="color: black;font-size: 24px">Pages</b><i
                                            class="fas fa-chevron-down"></i></a></li>
                                <li><a href="#"><b style="color: black;font-size: 24px">Blog</b><i
                                            class="fas fa-chevron-down"></i></a></li>
                                <li><a href="#"><b style="color: black;font-size: 24px">Contact</b><i
                                            class="fas fa-chevron-down"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Nav Bar -->


</header>
<br><br>
