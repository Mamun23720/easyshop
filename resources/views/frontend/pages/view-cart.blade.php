@extends('frontend.master2')

@section('content')

    <body>
        <div class="container">

            <h1>Shopping Cart</h1>

            @if ($myCart = session()->get('basket'))
                <table>
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($myCart as $cart)
                            <tr>
                                <td><img src="{{ url('/uploads/product/' . $cart['product_image']) }}"
                                        alt="{{ $cart['product_name'] }}"></td>
                                <td>{{ $cart['product_name'] }}</td>
                                <td>{{ number_format($cart['product_price'], 2) }} BDT</td>
                                <td style="text-align: center;">
                                    <input value="{{ $cart['quantity'] }}" id="quantity" name="quantity" type="number"
                                        style="height: 30px; width: 50px; background:wheat ; border-radius:5px; text-align:center;">
                                    <br>
                                    <a href="#">
                                        <button style="background-color: aqua;" type="submit "
                                            class="btn btn-warning mt-1 bg-black text-sm text-black rounded-md"><b>Update
                                                Cart</b></button>
                                    </a>
                                </td>
                                <td>{{ number_format($cart['subtotal'], 2) }} BDT</td>
                                <td>
                                    <a href="{{ route('remove.single.cart', $cart['product_id']) }}"
                                        class="btn btn-danger"><b>Remove</b></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="total-section">
                    <h2><b>Total: {{ number_format(array_sum(array_column(session()->get('basket'), 'subtotal')), 2) }} BDT
                        </b></h2>
                    <a class="btn btn-success btn-lg" href="{{ route('checkout') }}"><b>Checkout</b></a>
                </div>
            @else
                <table>
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
                <br><br><br>
                <br><br><br>
                <br><br><br>

                <h3 style="text-align: center;">Your cart is currently empty!!</h3>
                <div style="text-align: center;" class="mt-5">
                    <a style="color:white ;background-color: rgb(91, 120, 248) ;" href="{{ route('frontend.product') }}"
                        class="btn btn-lg"><b>Continue Shopping...</b></a>
                </div>
                <br><br><br>
                <br><br><br>
                <br><br><br>
                <br><br><br>
                <br><br><br>
            @endif
        </div>
    </body>

    </html>
@endsection
