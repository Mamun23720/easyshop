@extends('frontend.master2')

@section('content')



    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 90%;
            max-width: 1200px;
            margin: auto;
            padding: 2rem;
        }
        h1 {
            text-align: center;
            margin-bottom: 2rem;
            color: #333;
        }
        .product-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 1.5rem;
        }
        .product-card {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            overflow: hidden;
            width: calc(33.333% - 1.5rem);
            box-sizing: border-box;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0,0,0,0.2);
        }
        .product-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .product-card .details {
            padding: 1rem;
        }
        .product-card h2 {
            font-size: 1.25rem;
            margin: 0;
            color: #333;
        }
        .product-card p {
            margin: 0.5rem 0;
            color: #666;
        }
        .product-card .price {
            font-size: 1.5rem;
            color: #e94e77;
            font-weight: bold;
        }
        .product-card .btn {
            display: block;
            width: calc(100% - 2rem);
            margin: 1rem auto;
            padding: 0.75rem;
            text-align: center;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .product-card .btn:hover {
            background-color: #0056b3;
        }
    </style>
    <div class="container">
        <h1>All Products</h1>
        <div class="product-grid">
            @foreach($allProduct as $product)
                <div class="product-card">
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

@endsection
