<div class="container">
    <header class="d-flex justify-content-left py-3">

        <a style="margin-right: 15px;" href="/" class="nav-link"><b>Home</b></a>

        <a style="margin-right: 15px;" href="{{route('frontend.product')}}" class="nav-link"><b>Products</b></a>


        <!-- <a style="margin-right: 5px; background-color: rgb(0, 61, 61)" class="btn btn-primary btn-lg" href="{{route('frontend.customer')}}" class="nav-link">Customers</a></li> -->

        <div style="margin-left: 60%;" class="container">
                    <a style="background-color: yellow; border-radius: 50px; color:black" class="btn btn-primary btn-lg" href="{{route('cart.Item')}}" role="button">
                      <b>Cart Items</b>
                    </a>
                    <br>
                    <br>
                    <h5 style="margin-left: 0%;" ><b>{{count(session()->get('basket')) }} item - 00 BDT</b></h5>
                </div>

    </header>
  </div>
