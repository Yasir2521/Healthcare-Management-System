<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HealthCare Management</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Styles -->
    <style>
        /* Your existing CSS styles */
        /* Add new CSS here */
        /* body {
    font-family: Arial, sans-serif;
    background-color: #f3f4f6;
    margin: 0;
    padding: 0;
} */

.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
}

a {
    text-decoration: none;
    color: #333;
    padding: 8px 16px;
    border-radius: 4px;
    background-color: #fff;
    border: 1px solid #ccc;
    margin-right: 10px;
    transition: background-color 0.3s ease, color 0.3s ease;
}

a:hover {
    background-color: #333;
    color: #fff;
}
        .login-register {
            position: absolute;
            top: 20px;
            right: 20px;
        }
        .hero-section {
            background-color: #b8e994; /* Updated background color */
            color: #1a202c;
            padding: 7rem 2rem;
            text-align: center;
        }
        .hero-section h1 {
            font-size: 3rem;
            font-weight: 600;
            margin-bottom: 1rem;
        }
        .hero-section p {
            font-size: 1.25rem;
            margin-bottom: 5rem;
        }
        /* Footer styles */
        
        .footer {
    background-color: #2ecc71; /* Light green background color */
    color: #333; /* Footer text color */
    padding: 10.5rem;
    text-align: center;
}

        
    </style>
</head>
<body class="antialiased">
    <div class="relative min-h-screen">
        <div class="hero-section">
            <h1>Welcome to HealthCare Management</h1>
            <p>Your trusted partner in managing healthcare services efficiently.</p>
            <!-- Add any additional content here -->
        </div>
        @if (Route::has('login'))
            <div class="login-register">
                @auth
                    <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <!-- Footer section -->
        <footer class="footer">
            <div class="container">
                <h2>About HealthCare Management</h2>
                <p>HealthCare Management is a platform designed to streamline healthcare services and improve efficiency in managing medical facilities.</p>
            </div>
        </footer>
    </div>
</body>
</html>