<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: rgb(59 113 202);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background: rgb(255, 255, 255);
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        h1 {
            margin-bottom: 1rem;
            font-size: 24px;
            color: #333;
            text-align: center;
        }

        .form-group {
            margin-bottom: 1rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: bold;
        }

        .form-group input {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .form-group input[type="submit"] {
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }

        .form-group input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .form-group .error {
            color: red;
            font-size: 0.875rem;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Registration</h1>

        <form action="{{ route('frontend.registration') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="firstName">Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
                <span class="error" id="firstNameError"></span>
            </div>
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
                <span class="error" id="emailError"></span>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                <span class="error" id="passwordError"></span>
            </div>
            <div class="form-group">
                <label for="password">Retype Password</label>
                <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1">
                <span class="error" id="passwordError"></span>
            </div>
            <div class="form-group">
                <label for="password">Image</label>
                <input type="file" name="reg_image" class="form-control" id="image">
                <span class="error" id="passwordError"></span>
            </div>
            <div class="form-group">
                <input type="submit" value="Sign up">
            </div>
        </form>
    </div>

    <script>
        document.getElementById('registrationForm').addEventListener('submit', function(event) {
            event.preventDefault();

            // Clear previous errors
            document.querySelectorAll('.error').forEach(span => span.textContent = '');

            let isValid = true;

            // Validate first name
            const firstName = document.getElementById('firstName').value;
            if (firstName.trim() === '') {
                document.getElementById('firstNameError').textContent = 'First name is required.';
                isValid = false;
            }

            // Validate last name
            const lastName = document.getElementById('lastName').value;
            if (lastName.trim() === '') {
                document.getElementById('lastNameError').textContent = 'Last name is required.';
                isValid = false;
            }

            // Validate email
            const email = document.getElementById('email').value;
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailPattern.test(email)) {
                document.getElementById('emailError').textContent = 'Enter a valid email address.';
                isValid = false;
            }

            // Validate password
            const password = document.getElementById('password').value;
            if (password.length < 6) {
                document.getElementById('passwordError').textContent = 'Password must be at least 6 characters.';
                isValid = false;
            }

            // If form is valid, submit it
            if (isValid) {
                // Here you can handle form submission, e.g., send data to server
                alert('Registration successful!');
            }
        });
    </script>
</body>

</html>
