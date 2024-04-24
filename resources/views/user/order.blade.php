<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sign Up</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }
    .container {
        max-width: 600px;
        margin: 20px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    h1 {
        text-align: center;
        color: #333;
    }
    form {
        margin-top: 20px;
    }
    label {
        display: block;
        margin-bottom: 5px;
        color: #333;
    }
    input[type="text"], input[type="email"], input[type="password"], input[type="submit"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }
    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        border: none;
        cursor: pointer;
    }
    input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>
</head>
<body>

<div class="container">
    <h1>Bill</h1>
    <form action="{{url('upload_order')}}" method="post">
        @csrf
        
        <label for="name">Name</label>
        <input type="text" id="name" name="name" placeholder="Enter your name" required>
        
        <label for="address">Address:</label>
        <input type="text" id="address" name="address" placeholder="Enter your address" required>
        
        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>
        
        <label for="payment_method">Payment Method:</label>
        <select id="payment_method" name="payment_method">
            <option value="cash_on_delivery" selected>Cash on Delivery</option>
           
        </select>
        
        <input type="submit" value="Confirm Bill">
    </form>
</div>



</body>
</html>
