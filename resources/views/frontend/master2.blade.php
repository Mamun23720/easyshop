<!DOCTYPE html>
<html>
<head>
<title>S-Shop</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="OneTech shop project">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">



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
<link rel="stylesheet" type="text/css" href="https://preview.colorlib.com/theme/onetech/plugins/slick-1.8.0/slick.css">
<link rel="stylesheet" type="text/css" href="https://preview.colorlib.com/theme/onetech/styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="https://preview.colorlib.com/theme/onetech/styles/responsive.css">



<style>
body,h1 {font-family: "Raleway", sans-serif}
body, html {height: 100%}
</style>
<!-- For product  -->
<style>
    body {
        font-family: Arial, sans-serif;
    }

    h1 {
        text-align: start;

        color: #333;
    }

    .product-grid {
        display: flex;
        flex-wrap: wrap;
        gap: 0.5px;
        /* justify-content: center; Center horizontally */
        /* align-items: center; Center vertically */
        /* padding: 20px; Optional: Padding around the container */
    }

    .product-card {
        /* background: #2695e3; */
        margin-top: 2px;
        margin-bottom: 10px;
        margin-left: 2px;
        margin-right: 2px;
        height: 250px;
        width: 150px;
        border-radius: 5px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        width: calc(33.333% - 1.5rem);
        box-sizing: border-box;
        border: 1px solid #4160ff;
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .product-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
    }

    .image-container {
        position: relative;
        height: 200px;
        width: 100%;
    }

    .image-container img {
        height: 200px;
        width: 100%;
        object-fit: cover;
    }

    .overlay {
        position: absolute;
        z-index: 1000;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        color: white;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        opacity: 0;
        transition: opacity 0.3s ease;
        pointer-events: none;
        /* Ensure overlay does not block image interaction */
    }

    .image-container:hover .overlay {
        opacity: 1;
    }

    .button {
        border: 1px solid #002affe3;
        color: white;
        padding: 10px 10px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 15px;
        transition-duration: 0.4s;
        cursor: pointer;
    }

    .button2 {
        background-color: #1733c32e;
        color: black;
        border: 2px blue;
    }

    .button2:hover {
        background-color: #002affe3;
        color: white;
    }

    .button3 {
        background-color: #ff000000;
        color: black;
        border: 2px red;
    }

    .button3:hover {
        background-color: #e40e0e;
        color: black;
    }

    .product-card img {
        width: 100%;
        height: 180px;
        object-fit: cover;
        margin-bottom: 1px;
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
        position: relative;
        max-height: 100%;
        overflow: hidden;
        background: #dcdcff;
    }

    /* Slides */
    .slider {
        height: 500px;
        display: flex;
        width: 100%;
        /* Adjust this based on the number of slides */
        transition: transform 15s ease-in-out;
    }

    .slide {
        height: 700px;
        min-width: 100%;
        position: relative;
        transition: opacity 15s ease-in-out;
        opacity: 0;
        opacity: 50;
        visibility: visible;
        animation: fadeInRight 1s forwards;
    }

    @keyframes fadeInUp {
        0% {
            opacity: 0;
            transform: translateY(100px);
        }

        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .slide img {
        width: 100%;
        height: 100%;
    }

    /* Slider Content */
    .slider-content {
        position: absolute;
        top: 35%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        color: white;
    }
    .image-content {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        color: white;
    }
    .shop-now-btn {
        border: solid;
        padding: 10px 20px;
        color: white;
        cursor: pointer;
        transition: background-color 0.3s;
    }
    .shop-now-btn:hover {
        background-color: #0e8ce4;
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
        position: relative;
        overflow: hidden;
    }

    .category-image {
        height: 100%;
        width: 100%;
        object-fit: cover;
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
        background-color: rgba(0, 0, 0, 0.5);
        /* Transparent black overlay */
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .category-box:hover .category-name-overlay {

        opacity: 100;
        /* Shows overlay on hover */
    }

    .category-name-overlay h5 {
        color: white;
        font-size: 1.2rem;
        text-align: center;
        padding: 0;
        margin: 0;
    }
</style>


</head>





<body class="container-fluid">

    @include('notify::components.notify')

    @include('frontend.partials.header')

    <main>
    @yield('content')
    </main>
    @include('frontend.partials.footer')



    <!-- Include your slider JS code -->


    <script>
        let slideIndex = 0;
        showSlidesAuto();

        function showSlidesAuto() {
            let slides = document.getElementsByClassName("slide");
            let dots = document.getElementsByClassName("dot");

            for (let i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }

            for (let i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }

            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1;
            }

            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";

            setTimeout(showSlidesAuto, 10000); // Auto-slide every 10 seconds
        }

        function currentSlide(n) {
            slideIndex = n - 1; // Adjust for zero-based indexing
            showSlidesAuto();
        }
    </script>

    @notifyJs
    <script src="https://js.stripe.com/v3/"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</body>

</html>
