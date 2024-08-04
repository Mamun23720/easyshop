<div class="container">
    <header class="d-flex justify-content-left py-3">

        <a style="margin-right: 5px;" href="/" class="nav-link"><b>Home |</b></a>

        <a style="margin-right: 5px;" href="{{route('frontend.product')}}" class="nav-link"><b>Products |</b></a>


        <!-- <a style="margin-right: 5px; background-color: rgb(0, 61, 61)" class="btn btn-primary btn-lg" href="{{route('frontend.customer')}}" class="nav-link">Customers</a></li> -->

        <div style="margin-left: 75%;">
                    <a style="color:black" class="btn btn-warning" href="{{route('view.cart')}}">
                      <b>Cart item-
                        {{session()->has('basket') ? count(session()->get('basket')) : 0}}
                      </b>
                    </a>
                    <br>
                    <br>
        </div>

    </header>
  </div>
