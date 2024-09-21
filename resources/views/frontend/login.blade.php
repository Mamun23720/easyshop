<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: rgb(59 113 202);
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            background: rgba(45, 42, 78, 0.7);
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            max-width: 400px;
            width: 100%;
            color: #fff;
            text-align: center;
        }

        .login-container h1 {
            margin-bottom: 1.5rem;
            font-size: 2rem;
        }

        .form-group {
            margin-bottom: 1rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-size: 1rem;
        }

        .form-group input {
            width: 100%;
            padding: 0.75rem;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
        }

        .form-group input[type="text"],
        .form-group input[type="password"] {
            background: #fff;
            color: #333;
        }

        .form-group input[type="submit"] {
            background: #007bff;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 1.1rem;
            padding: 0.75rem;
            border-radius: 5px;
            transition: background 0.3s;
        }

        .form-group input[type="submit"]:hover {
            background: #0056b3;
        }

        .form-group .error {
            color: #ff4d4d;
            font-size: 0.875rem;
        }

        .forgot-password {
            margin-top: 1rem;
            font-size: 0.9rem;
        }

        .forgot-password a {
            color: #66b3ff;
            text-decoration: none;
        }

        .forgot-password a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <h1>Log in</h1>
        <form action="{{ route('frontend.login') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="username">Email Address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
                <span class="error" id="usernameError"></span>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                <span class="error" id="passwordError"></span>
            </div>
            <div class="form-group">
                <input type="submit" value="Log in">
            </div>
            <div class="forgot-password">
                <a href="#">Forgot your password?</a>
            </div>
            <div class="forgot-password">
                <p>Are you New?</p><a href="{{ route('frontend.user.registration') }}">Register Here</a>
            </div>
        </form>
    </div>

    <script>
        document.getElementById('loginForm').addEventListener('submit', function(event) {
            event.preventDefault();

            // Clear previous errors
            document.querySelectorAll('.error').forEach(span => span.textContent = '');

            let isValid = true;

            // Validate username
            const username = document.getElementById('username').value;
            if (username.trim() === '') {
                document.getElementById('usernameError').textContent = 'Username is required.';
                isValid = false;
            }

            // Validate password
            const password = document.getElementById('password').value;
            if (password.trim() === '') {
                document.getElementById('passwordError').textContent = 'Password is required.';
                isValid = false;
            }

            // If form is valid, submit it
            if (isValid) {
                // Handle form submission, e.g., send data to server
                alert('Login successful!');
            }
        });
    </script>
</body>

</html>
