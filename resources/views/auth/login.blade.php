<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- #<link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: lightseagreen;
}
h1{
    color: black;
    margin-bottom: 25px;
    text-align: center;
}

.flex {
    display: flex;
}

.justify-center {
    justify-content: center;
}

.items-center {
    align-items: center;
}

.h-screen {
    height: 100vh;
}

.max-w-xs {
    max-width: 20rem; /* Adjust as needed */
}

.bg-white {
    background-color: #fff;
}

.shadow-md {
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
}

.rounded {
    border-radius: 0.375rem; /* Adjust as needed */
}

.px-8 {
    padding-left: 2rem; /* Adjust as needed */
    padding-right: 2rem; /* Adjust as needed */
}

.py-8 {
    padding-top: 2rem; /* Adjust as needed */
    padding-bottom: 2rem; /* Adjust as needed */
}

.mb-4 {
    margin-bottom: 1rem; /* Adjust as needed */
}

.mb-6 {
    margin-bottom: 1.5rem; /* Adjust as needed */
}

.mb-12 {
    margin-bottom: 3rem; /* Adjust as needed */
}

.text-gray-700 {
    color: #4a5568;
}

.text-sm {
    font-size: 0.875rem; /* Adjust as needed */
}

.font-bold {
    font-weight: 700;
}

.text-center {
    text-align: center;
}

.block {
    display: block;
}

.inline-block {
    display: inline-block;
}

.text-blue-500 {
    color: #3f83f8;
}

.hover\:text-blue-800:hover {
    color: #2c5282;
}

.border {
    border-width: 1px;
    border-style: solid;
}

.border-gray-200 {
    border-color: #e2e8f0;
}

.focus\:outline-none:focus {
    outline: none;
}

.focus\:shadow-outline:focus {
    box-shadow: 0 0 0 3px rgba(66, 153, 225, 0.5);
}

.focus\:border-blue-500:focus {
    border-color: #3f83f8;
}

.bg-blue-500 {
    background-color: #3f83f8;
}

.hover\:bg-blue-700:hover {
    background-color: #2c5282;
}

.text-white {
    color: #fff;
}

.w-full {
    width: 100%;
}

.py-2 {
    padding-top: 0.5rem; /* Adjust as needed */
    padding-bottom: 0.5rem; /* Adjust as needed */
}

.px-4 {
    padding-left: 1rem; /* Adjust as needed */
    padding-right: 1rem; /* Adjust as needed */
}

.mr-2 {
    margin-right: 0.5rem; /* Adjust as needed */
}

.mt-8 {
    margin-top: 2rem; /* Adjust as needed */
}

.mt-2 {
    margin-top: 0.5rem; /* Adjust as needed */
}

</style>
</head>
<body class="bg-gray-100">

<div class="flex justify-center items-center h-screen">
    <div class="w-full max-w-xs">
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-4">
                <h1>Log In</h1>
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                    Email
                </label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    Password
                </label>
                <input id="password" type="password" name="password" required
                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="remember">
                    <input class="mr-2 leading-tight" type="checkbox" name="remember" id="remember">
                    <span class="text-sm">
                        Remember me
                    </span>
                </label>
            </div>
            <div class="flex items-center justify-between">

                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Sign In
                </button>
                <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="{{ route('password.request') }}">
                    Forgot Password?
                </a>
            </div>
        </form>
    </div>
</div>

</body>
</html>

