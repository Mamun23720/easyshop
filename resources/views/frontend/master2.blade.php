<!DOCTYPE html>
<html lang="en">
<head>
<title>S-Shop</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="OneTech shop project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="https://preview.colorlib.com/theme/onetech/styles/bootstrap4/bootstrap.min.css">
<link href="https://preview.colorlib.com/theme/onetech/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="https://preview.colorlib.com/theme/onetech/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="https://preview.colorlib.com/theme/onetech/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="https://preview.colorlib.com/theme/onetech/plugins/OwlCarousel2-2.2.1/animate.css">
@notifyCss
<link rel="stylesheet" type="text/css" href="https://preview.colorlib.com/theme/onetech/plugins/slick-1.8.0/slick.css">
<link rel="stylesheet" type="text/css" href="https://preview.colorlib.com/theme/onetech/styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="https://preview.colorlib.com/theme/onetech/styles/responsive.css">

<!-- For product  -->
<style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 100%;
        }
        h1 {
            text-align: center;
            margin-bottom: 2rem;
            margin-top: 2rem;
            color: #333;
        }
        .product-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 2.18rem;
        }
        .product-card {
            background: #ffabb3;
            height: 300px;
            width: 200px;
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
            height: 180px;
            object-fit: cover;
            border-radius: 10%;
            margin-bottom: 5px;
        }
        .product-card h2 {
            text-align: center;
            font-size: 1.25rem;
            color: #333;
        }
        .product-card p {
            text-align: center;
            color: #666;
        }
        .product-card .price {
            font-size: 1rem;
            color: #e94e77;
            font-weight: bold;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        th, td {
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


    </style>
<!-- For View-Cart Page  -->


</head>

<body>

@include('frontend.partials.header')

@include('notify::components.notify')

@yield('content')

@include('frontend.partials.footer')


<script src="https://preview.colorlib.com/theme/onetech/js/jquery-3.3.1.min.js"></script>
<script src="https://preview.colorlib.com/theme/onetech/styles/bootstrap4/popper.js"></script>
<script src="https://preview.colorlib.com/theme/onetech/styles/bootstrap4/bootstrap.min.js"></script>
<script src="https://preview.colorlib.com/theme/onetech/plugins/greensock/TweenMax.min.js"></script>
<script src="https://preview.colorlib.com/theme/onetech/plugins/greensock/TimelineMax.min.js"></script>
@notifyJs
<script src="https://preview.colorlib.com/theme/onetech/plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="https://preview.colorlib.com/theme/onetech/plugins/greensock/animation.gsap.min.js"></script>
<script src="https://preview.colorlib.com/theme/onetech/plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="https://preview.colorlib.com/theme/onetech/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="https://preview.colorlib.com/theme/onetech/plugins/slick-1.8.0/slick.js"></script>
<script src="https://preview.colorlib.com/theme/onetech/plugins/easing/easing.js"></script>
<script src="https://preview.colorlib.com/theme/onetech/js/custom.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"8b6b446d1dd97704","serverTiming":{"name":{"cfL4":true}},"version":"2024.8.0","token":"cd0b4b3a733644fc843ef0b185f98241"}' crossorigin="anonymous"></script>
</body>
</html>
