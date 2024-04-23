<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Healthcare Management</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: white; /* Adjust background color here */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .register-container {
            background-image: url('img1/laptop-keyboard-stethoscope-on-blue-260nw-1907543080.webp'); /* Change background color to black */
            color: black; /* Change text color to white for better contrast */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 320px;
            
        }
        .form-group {
            margin-bottom: 15px;
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
            width: 100%;
            padding: 10px;
            background-color: #2ECC71 ;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .form-group button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <h2 style="text-align: center;">ADD NEW DOCTOR</h2>
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{session()->get('message')}}
            </div>
        @endif
        <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input id="name" type="text" name="name" required autofocus>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input id="email" type="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input id="phone" type="text" name="phone" required>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input id="address" type="text" name="address" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input id="password" type="password" name="password" required>
            </div>
            <div class="form-group">
                <button type="submit">Register</button>
            </div><br>
            <a href="{{ url('/home') }}">BACK</a>
        </form>
    </div>
</body>
</html>
