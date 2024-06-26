<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Healthcare Management</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: yellow, white, yellow;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .register-container {
            background-color: grey;
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
            background-color: black;
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
        <h2 style="text-align: center;">ADD NEW DELIVERY MAN</h2>
        @if(session()->has('message'))
            <div class = "alert alert-success">

               {{session()->get('message')}}

            </div>
        @endif
        <form action="{{url('upload_deliveryman')}}" method="POST" enctype="multipart/form-data">
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
                <label for="adress">Address</label>
                <input id="adress" type="text" name="adress" required>
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