<!DOCTYPE html>
<html lang="en">

<head>
    <title>S-Shop</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="OneTech shop project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css"
        href="https://preview.colorlib.com/theme/onetech/styles/bootstrap4/bootstrap.min.css">
    <link href="https://preview.colorlib.com/theme/onetech/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css"
        rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css"
        href="https://preview.colorlib.com/theme/onetech/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css"
        href="https://preview.colorlib.com/theme/onetech/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css"
        href="https://preview.colorlib.com/theme/onetech/plugins/OwlCarousel2-2.2.1/animate.css">
    @notifyCss
    <link rel="stylesheet" type="text/css"
        href="https://preview.colorlib.com/theme/onetech/plugins/slick-1.8.0/slick.css">
    <link rel="stylesheet" type="text/css" href="https://preview.colorlib.com/theme/onetech/styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="https://preview.colorlib.com/theme/onetech/styles/responsive.css">

    
    <!-- For product  -->
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h1 {
            text-align: start;
            margin-bottom: 2rem;
            margin-top: 2rem;
            margin-left: 3rem;
            color: #333;
        }

        .product-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 1.75rem;
        }

        .product-card {
            background: #1387d9;
            height: 300px;
            width: 200px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: calc(33.333% - 1.5rem);
            box-sizing: border-box;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        .product-card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            border-radius: 6%;
            margin-bottom: 5px;
        }

        .product-card h2 {
            text-align: center;
            font-size: 20px;
            color: #ffffff;
            margin-top: 10px;
        }

        .product-card p {
            text-align: center;
            color: #ffffff;
            font-size: larger;
        }

        .product-card .price {
            color: #ffffff;
            font-weight: bold;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        th,
        td {
            padding: 1rem;
            text-align: left;
        }

        th {
            background: #007bff;
            color: white;
        }

        tr:nth-child(even) {
            background: #f9f9f9;
        }

        td img {
            max-width: 100px;
            height: auto;
            border-radius: 4px;
        }

        .total-section {
            margin-left: 750px;
            margin-top: 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .total-section h2 {
            margin: 0;
            font-size: 1.5rem;
            color: #333;
        }

        .deals_timer_unit {
            width: 33.33333333%;
            font-size: 24px;
            font-weight: 500;
            color: #000000;
            padding-left: 12px;
            padding-right: 12px;
            padding-top: 3px;
            padding-bottom: 2px;
            float: left;
        }
        
        /* Slider Container */
        .slider-container {
            margin-bottom: 10px;
            margin-top: 10px;
            margin-left: 50px;
            margin-right: 50px;
            border-radius: 50px;
            position: relative;
            max-width: 100%;
            overflow: hidden;
        }

        /* Slides */
        .slider {
            height: 580px;
            display: flex;
            width: 100%; /* Adjust this based on the number of slides */
            transition: transform 15s ease-in-out;
        }

        .slide {
            height: 580px;
            min-width: 100%;
            position: relative;
        }

        .slide img {
            width: 100%;
            height: 100%;
        }

        /* Slider Content */
        .slider-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: white;
        }

    

        .shop-now-btn {
            background-color: #2e3cf9;
            border: none;
            padding: 10px 20px;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .shop-now-btn:hover {
            background-color: #4733fe;
        }

        /* Navigation Dots */
        .dots {
            position: absolute;
            bottom: 15px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
        }

        .dot {
            height: 15px;
            width: 15px;
            margin: 0 5px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            cursor: pointer;
        }

        .dot.active {
            background-color: #3300ff;
        }
        .category-box {
            background-color: #4160ff;
            height: 200px;
            width: 200px;
            border-radius: 10px;
            position: relative;
            overflow: hidden;
        }

        .category-image {
            height: 100%;
            width: 100%;
            object-fit: cover;
            border-radius: 10px;
        }

        /* Overlay text */
        .category-name-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: rgba(0, 0, 0, 0.5); /* Transparent black overlay */
            border-radius: 10px;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .category-box:hover .category-name-overlay {
            opacity: 1; /* Shows overlay on hover */
        }

        .category-name-overlay h5 {
            color: white;
            font-size: 1.2rem;
            text-align: center;
            padding: 0;
            margin: 0;
        }


    </style>
    <!-- For View-Cart Page  -->


</head>

<body>

    @include('frontend.partials.header')

    @include('notify::components.notify')

    @yield('content')

    @include('frontend.partials.footer')

@notifyJs


</body>

</html>
