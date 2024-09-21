<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        /* Basic CSS styling */
        body {
            font-family: 'Times New Roman', Times, serif;
            background-color: #007bff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            background-color: white;
            padding: 40px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            width: 100%;
            max-width: 260px;
            border: solid black;
        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
            font-size: 24px;
            color: #333;
        }

        .input-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        input[type="checkbox"] {
            margin-right: 8px;
        }

        .btn-submit {
            width: 100%;
            background-color: #00b5ff;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            font-size: 18px;
            cursor: pointer;
            margin-top: 10px;
        }

        .btn-submit:hover {
            background-color: #316cb9;
        }

        .forgot-password,
        .sign-up {
            display: block;
            text-align: center;
            margin-top: 15px;
            color: #007bff;
            text-decoration: none;
        }

        .forgot-password:hover,
        .sign-up:hover {
            text-decoration: underline;
        }

        .error-message {
            color: red;
            text-align: center;
            margin-bottom: 15px;
        }
    </style>
</head>

<body>

    <div class="login-container">
        <h2>Login</h2>

        <!-- Error Message (optional) -->
        <div class="error-message" id="error-message" style="display:none;">
            Invalid username or password
        </div>

        <!-- Login Form -->
        <form action="{{ route('frontend.login') }}" method="post" enctype="multipart/form-data">
            @csrf
            <!-- Username/Email -->
            <div class="input-group">
                <label for="email">Email Address</label>
                <input type="text" id="username" name="email" placeholder="Enter Your Email Address" required>
            </div>

            <!-- Password -->
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter Your Password" required>
            </div>

            <!-- Remember Me -->
            <!-- <div class="input-group">
                <input type="checkbox" id="remember-me" name="remember-me">
                <label for="remember-me">Remember me</label>
            </div> -->

            <!-- Submit Button -->
            <input type="submit" class="btn-submit" value="Log In">

            <!-- Forgot Password -->
            <a href="#" class="forgot-password">Forgot Password?</a>

            <!-- Sign-up Link -->
            <a href="{{ route('frontend.user.registration') }}" class="sign-up">Don't have an account? Register here</a>
        </form>
    </div>

</body>

</html>