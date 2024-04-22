<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Hospital Management - Blood Donation</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f9f9f9; /* Background color for the entire page */
    }

    header {
        background-color: #333;
        color: #fff;
        padding: 20px;
        text-align: center;
    }

    .container {
        width: 80%;
        margin: auto;
        padding: 20px;
    }

    .blood-donation {
        background-color: #fff; /* Background color for the donation section */
        padding: 20px;
        border-radius: 10px;
        margin-top: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Add a subtle shadow */
    }

    .blood-donation h2 {
        color: #333;
    }

    .blood-form label {
        display: inline-block;
        width: 25%;
        margin-bottom: 5px;
    }

    .blood-form input[type="text"],
    .blood-form input[type="email"],
    .blood-form select {
        width: 70%; /* Adjust input width */
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }

    .blood-form textarea {
        width: 70%; /* Adjust textarea width */
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }

    .blood-form input[type="submit"] {
        background-color: #333;
        color: #fff;
        border: none;
        padding: 10px 20px;
        cursor: pointer;
        border-radius: 5px;
    }

    .blood-form input[type="submit"]:hover {
        background-color: #555;
    }

    .alert {
        background-color: #dff0d8; /* Success alert background color */
        border: 1px solid #d0e9c6; /* Success alert border color */
        color: #3c763d; /* Success alert text color */
        padding: 15px;
        margin-bottom: 20px;
        border-radius: 5px;
    }

</style>
</head>
<body>

<header>
    <h1>Hospital Management System</h1>
</header>

<div class="container">
    <div class="blood-donation">
        @if(session()->has('message'))
        <div class="alert alert-success">
            {{session()->get('message')}}
        </div>
        @endif        
        <h2>Add transportation</h2>

        <form action="{{ url('upload_transportation') }}" method="POST" class="blood-form">
            @csrf

            
            <label for="type">Vehicle Type:</label>
            <select id="type" name="type" required>
                <option>--Select</option>
                <option value="Ambulance">Ambulance</option>
                <option value="Hearse">Hearse</option>

          
            </select>

            <label for="phone">Phone number of Driver:</label>
            <input type="text" id="number" name="phone" required>

            <label for="number">Vehicle No:</label>
            <input type="text" id="number" name="number" required>

            <input type="submit" value="Submit">

            
        </form><br>
        <a href="{{ url('/home') }}">BACK</a>
    </div>
</div>

</body>
</html>
