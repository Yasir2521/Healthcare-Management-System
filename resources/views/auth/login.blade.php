<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Your Healthcare Management</title>
    <!-- Styles -->
    <style>
    /* Add your custom styles here */
    body {
        font-family: Arial, sans-serif;
        background-image: url('img1/laptop-keyboard-stethoscope-on-blue-260nw-1907543080.webp'); /* Replace 'your_image_url.jpg' with the URL of your image */
        background-size: cover;
        background-position: center;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    .login-container {
        background-color: rgba(255, 255, 255, 0.8); /* Add opacity to make the form more readable */
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 400px;
    }
    .logo {
        text-align: center;
        margin-bottom: 20px;
    }
    .form-group {
        margin-bottom: 20px;
    }
    .form-group label {
        display: block;
        font-weight: bold;
    }
    .form-group input {
        width: 95%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        
    }
    .form-group button {
    width: 50%; 
    margin: 0 auto; 
    padding: 15px; 
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.form-group button:hover {
    background-color: #0056b3;
}

</style>

</head>
<body>
    <div class="login-container">
        <div class="logo">
            <h1>Healthcare Management</h1>
        </div>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group">
                <label for="email">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input id="password" type="password" name="password" required>
            </div><br>

            <div class="form-group" style="text-align: center;">
                <button type="submit">Log in</button>
            </div>
            <div class="flex items-center justify-between">
                <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="{{ route('password.request') }}">
                    Forgot Password?
                </a>
            </div>
        </form>
    </div>
</body>
</html>
