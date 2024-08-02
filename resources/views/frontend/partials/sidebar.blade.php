<div class="container">
    <header class="d-flex justify-content-left py-3">

        <a style="margin-right: 15px;" href="/" class="nav-link"><b>Home</b></a>

        <a style="margin-right: 15px;" href="{{route('frontend.product')}}" class="nav-link"><b>Products</b></a>


        <!-- <a style="margin-right: 5px; background-color: rgb(0, 61, 61)" class="btn btn-primary btn-lg" href="{{route('frontend.customer')}}" class="nav-link">Customers</a></li> -->

        <div style="margin-left: 75%;">
                    <a style="color:black" class="btn btn-warning" href="{{route('cart.Item')}}">
                      <b>Cart- ({{count(session()->get('basket'))}})</b>
                    </a>
                    <br>
                    <br>
        </div>

    </header>
  </div>
