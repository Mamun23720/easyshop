<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Become A Seller</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: rgb(59 113 202);
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 50px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .login-box {
            background-color: #ffffff;
            border-radius: 8px;
            border: solid black;
            padding: 30px;
            width: 350px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }
        .login-box h2 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
        }
        .login-box .form-group {
            margin-bottom: 20px;
        }
        .login-box .btn {
            width: 100%;
            background-color: #3300ff;
            color: #ffffff;
            border: none;
            padding: 10px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        .login-box .btn:hover {
            background-color: #e04e00;
        }
        .login-box .link {
            margin-top: 10px;
            display: flex;
            justify-content: space-between;
            color: #007bff;
            font-size: 14px;
            text-decoration: none;
        }
        .login-box .link:hover {
            text-decoration: underline;
        }
        .content-box {
            max-width: 80%;
        }
        .content-box h1 {
            font-size: 48px;
            color: #ffffff;
            margin-bottom: 20px;
        }
        .content-box p {
            font-size: 24px;
            color: #ffffff;
        }
        .content-box img {
            width: 80px;
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Left Content Box -->
        <div class="content-box">
            <h1>Become A S-Shop Seller!!!</h1>
            <p>Create a S-Shop seller account now and reach millions of customers!</p>
            <img style="height: 70%; width:100%; border: solid black; border-radius:10%" src="{{url('/uploads/important/Logo.JPG/')}}" alt="Shopping Cart"> <!-- Placeholder for cart image -->
        </div>

        <!-- Right Login Box -->
        <div class="login-box">
            <h2>Login with Password</h2>
            <form action="#" method="post">
                <div class="form-group">
                    <label for="mobile-email">Mobile Number/ Email</label>
                    <input type="text" id="mobile-email" class="form-control" placeholder="Enter Mobile Number/ Email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" class="form-control" placeholder="Enter Password" required>
                </div>
                <button type="submit" class="btn">Login</button>
            </form>
            <div class="d-flex justify-content-between mt-3">
                <a href="#" class="link">Reset password</a>
                <a href="#" class="link">Create a new account</a>
            </div>
            <div class="text-center mt-2">
                <a href="#" class="link">Register as Global Seller</a>
            </div>
        </div>
    </div>
</body>
</html>
