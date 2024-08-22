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
                        <p>{{ $product->description }}</p>
                        <p class="price">${{ number_format($product->price, 2) }}</p>
                        <a href="{{ route('show.product', $product->id) }}" class="btn">View Details</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection