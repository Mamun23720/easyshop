<header style="background: rgb(77 106 215); font-family:'Times New Roman', Times, serif">


    <!-- Top Bar -->

    <div  style="background: rgb(77 106 215)" class="top_bar">
        <div style="padding: 0px;" class="flex-container">
            <div class="row">
                <div style="color: rgb(255, 255, 255)" class="col d-flex flex-row">
                    <div style="font-size:20px; color:rgb(255, 255, 255); margin-right:0px" class="top_bar_contact_item ml-5">
                        <div class="top_bar_icon"></div><i class="bi bi-telephone"></i>
                    </div>
                    <div class="top_bar_contact_item mr-0">
                        <div class="top_bar_icon"></div><a style="font-size:20px; color:rgb(255, 255, 255);" href="#"><b style="color: rgb(200, 0, 0)">+8801627736636 </b></a>(Any Help?)
                    </div>

                    <div class="top_bar_content ml-auto">
                            <div class="top_bar_user mr-5">
                                <div class="user_icon"></div>
                                <div><a style="font-size:20px; color:rgb(255, 255, 255);" href="{{route('becomeASeller')}}"><b>Become a seller</b></a></div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Top Bar -->


    <!-- Middle Bar -->

    <div class="header_main">
        <div style=" height: 100px;">
            <div style="height: 100px;"  class="row">

                <div style="height: 100px; max-width:150px;" class="col">
                    <div  style="height: 100px; " class="logo_container">
                        <div style="max-width:100px; margin-left:20px" class="logo">
                            <a href="/">
                                <img style="height: 80px; width: 200px; border-radius: 10%; border: solid white"
                                    src="{{ url('/uploads/important/Logo.JPG') }}" alt="S-Shop">
                            </a>
                        </div>
                    </div>
                </div>


                <div style="height: 100px; max-width:200px;" class="col">
                    <div  style="height: 100px; width:110px; " class="logo_container">
                        <div class="logo">
                            <a href="/">
                                <h3 style="color: white; font-family:'Times New Roman', Times, serif ">For Better Experience</h3>
                            </a>
                        </div>
                    </div>
                </div>




                <div style=" height: 100px;" class="col">
                    <div style=" height: 100px;" class="header_search">
                        <div style="width: 700px;" class="header_search_content">
                            <div style="margin-left: 30px" class="header_search_form_container">
                                <form action="{{ route('search') }}" class="header_search_form clearfix">
                                    <input name="search_key" style="width: 100%; height: 100%"
                                        value="{{ request()->search_key }}" type="text" class="header_search_input"
                                        placeholder="Search in S-Shop">
                                    <button style="width: 50px; height: 100%; background: #1733c32e;" type="submit"
                                        class="header_search_button trans_300" value="Submit">
                                        <b style="color: rgb(59 113 202); font-size:30px; "><i class="bi bi-search"></i></b>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div style=" height: 100px;" class="col">
                    <div style=" height: 100px; margin-left:45px" class="wishlist_cart d-flex flex-row align-items-center justify-content-center">
                        <div style="margin-right: 25px;" class="wishlist d-flex flex-row align-items-center justify-content-center">
                            <div class="wishlist_icon">
                                <a style="color: white" href=""><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                        fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                        <path
                                            d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15" />
                                    </svg></a>
                            </div>
                            <div class="wishlist_content">
                                <div class="wishlist_text"><a href="#"><b style="color: white">Wishlist</b></a></div>
                                <div style="color: white" class="wishlist_count"><b>0 item</b></div>
                            </div>
                        </div>



                        <div class="cart">
                            <div style="margin-right: 25px;" class="cart_container d-flex flex-row align-items-center justify-content-center">
                                <div class="cart_icon">
                                    <a style="color: white" href="{{ route('view.cart') }}"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="40" height="40" fill="currentColor" class="bi bi-cart4"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l.5 2H5V5zM6 5v2h2V5zm3 0v2h2V5zm3 0v2h1.36l.5-2zm1.11 3H12v2h.61zM11 8H9v2h2zM8 8H6v2h2zM5 8H3.89l.5 2H5zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0" />
                                        </svg></a>
                                    <div class="cart_count"><a
                                        style="color: white" href=""><span>{{ session()->has('basket') ? count(session()->get('basket')) : 0 }}</span></a>
                                    </div>
                                </div>
                                <div class="cart_content">
                                    <div class="cart_text"><a href="{{ route('view.cart') }}"><b style="color: white">Cart</b></a></div>
                                    <div class="cart_price">

                                        @if ($myCart = session()->get('basket'))
                                            <b style="color: white">{{ array_sum(array_column(session()->get('basket'), 'subtotal')) }} BDT</b>
                                        @else
                                            <b style="color: white">00 BDT</b>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>



                @guest('customerGuard')

                        <div class="account_bar_menu">
                            <ul class="standard_dropdown account_bar_dropdown">
                                <li>
                                    <div style="margin-right: 25px;" class="wishlist d-flex flex-row align-items-center justify-content-center">
                                        <div class="wishlist_icon">
                                            <a style="color: white" href=""><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
                                              </svg></a>
                                        </div>
                                        <div class="wishlist_content">
                                            <div class="wishlist_text"><a href="#"><b style="font-size: 24px; color:white">Account</b></a></div>
                                        </div>
                                    </div>
                                    <ul style="height: 120px; width:180px; background: rgb(84 136 223); "><hr>
                                        <li style=""><a style="text-align:center;
                                            font-size:18px;
                                            color: white;
                                            background-color: transparent;
                                            text-decoration: none;
                                            transition: background-color 0.3s, color 0.3s;" href="{{ route('frontend.user.registration') }}"
                                             onmouseover="this.style.backgroundColor='#ffffff'; this.style.color='#000000';"
                                             onmouseout="this.style.backgroundColor='transparent'; this.style.color='#ffffff';"><b>Register</b></a></li><hr>
                                        <li style=""><a style="text-align:center;
                                            font-size:18px;
                                            color: white;
                                            background-color: transparent;
                                            text-decoration: none;
                                            transition: background-color 0.3s, color 0.3s;" href="{{ route('frontend.user.login') }}"
                                             onmouseover="this.style.backgroundColor='#ffffff'; this.style.color='#000000';"
                                             onmouseout="this.style.backgroundColor='transparent'; this.style.color='#ffffff';"><b>Login</b></a></li><hr>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                 @endguest


                 @auth('customerGuard')

                        <div class="account_bar_menu">
                            <ul class="standard_dropdown account_bar_dropdown">
                                <li>
                                    <div style="margin-right: 15px;" class="wishlist d-flex flex-row align-items-center justify-content-center">
                                        <div style="height: 100px; max-width:150px; margin-top: 20px;" class="wishlist_icon">
                                            <a href="{{ route('view.profile') }}"><img style="height: 80px; max-width:150px;"  src="{{ url('/uploads/customerRegistration/' . auth('customerGuard')->user()->image) }}"
                                                alt="{{ auth('customerGuard')->user()->name }}"
                                                class="rounded-circle mt-1">
                                           </a>
                                        </div>
                                    </div>
                                    <ul style="height: 112px; width:151px; background: rgb(84 136 223); margin-top:45px; " >
                                        <li><a style="text-align:center;
                                            font-size:18px;
                                            color: white;
                                            background-color: transparent;
                                            text-decoration: none;
                                            transition: background-color 0.3s, color 0.3s;"
                                     href="{{ route('view.profile') }}"
                                     onmouseover="this.style.backgroundColor='#ffffff'; this.style.color='#000000';"
                                     onmouseout="this.style.backgroundColor='transparent'; this.style.color='#ffffff';">
                                     <b>Profile</b>
                                  </a>
                                  <hr></li>
                                        <li><a style="text-align:center;
                                            font-size:18px;
                                            color: white;
                                            background-color: transparent;
                                            text-decoration: none;
                                            transition: background-color 0.3s, color 0.3s;"
                                     href="{{ route('frontend.logout') }}"
                                     onmouseover="this.style.backgroundColor='#ffffff'; this.style.color='#000000';"
                                     onmouseout="this.style.backgroundColor='transparent'; this.style.color='#ffffff';">
                                     <b>Logout</b>
                                  </a>
                                  </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Middle Bar -->


    <!-- Nav Bar -->



    <nav style="background: rgb(59 113 202);" class="main_nav">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div style="justify-content: center; align-items:center;" class="main_nav_content d-flex flex-row">
                        <div>
                            <ul class="standard_dropdown main_nav_dropdown">

                                <li><a href="/"><b style="color: white; font-size: 24px">Home</b><i
                                            class="fas fa-chevron-down"></i></a></li>
                                <li><a href="{{ route('frontend.product') }}"><b style="color: white;font-size: 24px">Products</b><i
                                            class="fas fa-chevron-down"></i></a></li>
                                <li><a href="#"><b
                                            style="color: white;font-size: 24px">Categories</b><i
                                            class="fas fa-chevron-down"></i></a></li>
                                <li><a href="#"><b style="color: white;font-size: 24px">Pages</b><i
                                            class="fas fa-chevron-down"></i></a></li>
                                <li><a href="#"><b style="color: white;font-size: 24px">Blog</b><i
                                            class="fas fa-chevron-down"></i></a></li>
                                <li><a href="#"><b style="color: white;font-size: 24px">Contact</b><i
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
