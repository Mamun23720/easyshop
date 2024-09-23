<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S-Shop Registration</title>
    <link rel="stylesheet" href="styles.css">
    <style>


        body {
    font-family: 'Times New Roman', Times, serif;
    background-color: #007bff; /* Background color */
    margin: 10%;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.registration-container {
    width: 500px; /* Increased width */
    padding: 30px;
    background: #fff;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    border-radius: 10px; /* Rounded corners */
    border:  solid black;
}

.registration-container h2 {
    margin-bottom: 25px;
    font-size: 26px;
    color: #333;
    text-align: center;
    font-weight: bold;
}

.registration-form .form-group {
    margin-bottom: 20px;
}

.registration-form label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
    color: #333;
}

.registration-form input[type="text"],
.registration-form input[type="email"],
.registration-form input[type="tel"],
.registration-form input[type="password"],
.registration-form select {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 14px;
    box-sizing: border-box;
    background-color: #f9f9f9;
}

.registration-form .form-group-column {
    display: flex;
    justify-content: space-between;
    gap: 20px; /* Space between columns */
}

.registration-form .form-group-column .form-group {
    width: 48%;
}

.registration-form .checkbox-group {
    display: flex;
    align-items: center;
    margin-top: 10px;
}

.registration-form input[type="checkbox"] {
    margin-right: 10px;
}

.registration-form button[type="submit"] {
    width: 100%;
    padding: 12px;
    background: #28a745;
    border: none;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
    border-radius: 5px;
    margin-top: 15px;
    font-weight: bold;
}

.registration-form button[type="submit"]:hover {
    background: #218838;
}

.registration-form a {
    color: #007bff;
    text-decoration: none;
}

.registration-form a:hover {
    text-decoration: underline;
}

.registration-form p {
    margin-top: 15px;
    font-size: 14px;
    text-align: center;
}

.registration-form .full-width {
    width: 100%;
}

/* Checkbox and label inline */
.registration-form .checkbox-inline {
    display: flex;
    align-items: center;
    font-size: 14px;
}

.registration-form .checkbox-inline input[type="checkbox"] {
    margin-right: 8px;
}

/* Updated label alignment */
.registration-form .checkbox-inline label {
    display: inline; /* Inline label */
    margin: 0;
}

input[type="number"] {
    -moz-appearance: textfield;  /* Remove default Mozilla styling */
    -webkit-appearance: none;    /* Remove default WebKit styling */
    appearance: none;            /* Remove the default browser styling */
    padding: 10px;
    width: 100%;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
    background-color: #f9f9f9;
}

input[type="number"]:focus {
    outline: none;
    border-color: #007bff;
}

input[type="tel"],
input[type="number"] {
    padding: 10px;
    width: 93%;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
    background-color: #f9f9f9;
}

/* Remove the increment/decrement arrows */
input[type="number"]::-webkit-outer-spin-button,
input[type="number"]::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
}



    </style>
</head>
<body>
    <div class="registration-container">
        <h2>Registration</h2>
        <form action="{{ route('frontend.registration') }}" method="post" enctype="multipart/form-data" class="registration-form">
        @csrf
            <!-- Full Name Row -->
            <div class="form-group">
                <div class="form-group full-width">
                    <label for="full-name">Full Name *</label>
                    <input type="text" id="full-name" name="name" placeholder="Enter Your Full Name" required>
                </div>
            </div>

            <!-- Email & Phone Row -->

            <div class="form-group-column">

                <div class="form-group">
                    <label for="email">Email Address *</label>
                    <input type="email" id="email" name="email" placeholder="Enter Your Email Address" required>
                </div>

                <div class="form-group">
                    <label for="phone">Phone Number *</label>
                    <input type="number" id="phone" name="phone" placeholder="Enter Your Phone Number" required>
                </div>
            </div>

            <div class="form-group-column">
            <!-- User Name Field -->
            <div class="form-group">
                <label for="username">User Name *</label>
                <input type="text" id="username" name="username" placeholder="Enter Your User Name" required>
            </div>
            <!-- Date of Birth Field -->
            <div class="form-group">
                <label for="dob">Date of Birth *</label>
                <input style="height: 40px; width: 240px;" type="date" id="dob" name="dob" placeholder="Enter Your Date of Birth" required >
            </div>
            </div>


            <!-- Password Row -->
            <div class="form-group-column">
                <div class="form-group">
                    <label for="password">Password *</label>
                    <input type="password" id="password" name="password" placeholder="Enter Your Password" required>
                </div>
                <div class="form-group">
                    <label for="password_confirmation">Confirm Password *</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Retype Your Password" required>
                </div>
            </div>

            <!-- Address Row -->
            <div class="form-group-column">
                <div class="form-group">
                    <label for="address">Street Address</label>
                    <input type="text" id="address" name="address" placeholder="Enter Your Address">
                </div>
                <div class="form-group">
                    <label for="city">City</label>
                    <input type="text" id="city" name="city" placeholder="Enter Your City">
                </div>
            </div>

            <!-- Zip and Country Row -->
            <div class="form-group-column">
                <div class="form-group">
                    <label for="zip">Zip/Postal Code</label>
                    <input type="text" id="zip" name="zip" placeholder="Enter Your Zip">
                </div>
                <div class="form-group">
                    <label for="country">Country *</label>
                    <select id="country" name="country">
                        <option value="">Select Your Country</option>
                        <option value="Bangladesh">Bangladesh</option>
                        <option value="Other">Other</option>
                        <!-- Add more countries as needed -->
                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="form-group full-width">
                    <label for="image">Image *</label>
                    <input type="file" id="image" name="reg_image" placeholder="Enter Your Image" required>
                </div>
            </div>

            <!-- Preferences & Agreements -->
            <!-- <div class="form-group checkbox-inline">
                <input type="checkbox" id="terms" name="terms" required>
                <label for="terms">I agree to the <a href="#">Terms & Conditions</a></label>
            </div>
             -->
            <!-- Submit Button -->
            <div class="form-group full-width">
                <button type="submit">Create Account</button>
            </div>

            <!-- Login Link -->
            <div class="form-group full-width">
                <p>Already have an account? <a href="#">Login here</a>.</p>
            </div>
        </form>
    </div>
</body>
</html>
