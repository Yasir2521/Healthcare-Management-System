<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Doctors List</title>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f7f7f7;
    margin: 0;
    padding: 0;
  }
  .container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    position: relative; /* Position relative for centering */
  }
  table {
    width: 100%;
    border-collapse: collapse;
  }
  th, td {
    padding: 15px;
    text-align: left;
    border-bottom: 1px solid #ddd;
  }
  th {
    background-color: #ff6f61; /* Coral red */
    color: white;
  }
  tr:nth-child(even) {
    background-color: #ffd166; /* Yellow */
  }
  tr:hover {
    background-color: #ffb703; /* Orange */
  }
  .go-back-container {
    text-align: center; /* Center align the button */
    margin-top: 20px; /* Add some space from the table */
  }
  .go-back-link {
    display: inline-block;
    padding: 10px 20px;
    background-color: #ff6f61; /* Red */
    color: #fff;
    text-decoration: none;
    border-radius: 4px;
    transition: background-color 0.3s ease;
  }
  .go-back-link:hover {
    background-color: #e63946; /* Darker red */
  }

  .go-cart-link {
    display: inline-block;
    padding: 10px 20px;
    background-color: #00FF00; /* Red */
    color: #fff;
    text-decoration: none;
    border-radius: 4px;
    transition: background-color 0.3s ease;
  }
  .go-cart-link:hover {
    background-color: #008000; /* Darker red */
  }
  
  /* Button-like styling for order medicine link */
  .order-medicine-link {
    display: inline-block;
    padding: 10px 20px;
    background-color: #007bff; /* Blue */
    color: #fff;
    text-decoration: none;
    border-radius: 4px;
    transition: background-color 0.3s ease;
  }
  .order-medicine-link:hover {
    background-color: #0056b3; /* Darker blue */
  }
  .confirm-link {
    display: inline-block;
    padding: 10px 20px;
    background-color: #800080; /* Blue */
    color: #fff;
    text-decoration: none;
    border-radius: 4px;
    transition: background-color 0.3s ease;
  }
  .confirm-link:hover {
    background-color: #4b0082; /* Darker blue */
  }
  .cancel-medicine-link {
    display: inline-block;
    padding: 10px 20px;
    background-color: #ff6f61; 
    color: #fff;
    text-decoration: none;
    border-radius: 4px;
    transition: background-color 0.3s ease;
  }
  .cancel-medicine-link:hover {
    background-color: #e63946; 
  }
  .alert {
        background-color: #dff0d8; /* Success alert background color */
        border: 1px solid #d0e9c6; /* Success alert border color */
        color: #3c763d; /* Success alert text color */
        padding: 15px;
        margin-bottom: 20px;
        border-radius: 5px;
    }
    .quantity-input {
    width: 50px; /* Adjust width as needed */
  }

</style>
</head>
<body>

<div class="container">
@if(session()->has('message'))

<div class = "alert alert-success">


    {{session()->get('message')}}

</div>
@endif
  <table>
    <thead>
      <tr>
        <th>Medicine Name</th>
        <th>Power</th>
        
        <th>Amount</th>
        <th>Quantity</th>
        
        <th></th>
        <th></th>
        <th></th>
        <th>Total Price</th>
        
        
       
      </tr>
    </thead>
    <tbody>
      <!-- Assuming $add_medicine is an array or iterable -->
      @foreach ($orders as $order)
      <tr>
        <td>{{ $order->name }}</td>
        <td>{{ $order->power }}</td>
        <td>{{ $order->amount }}</td>
        <td>{{ $order->quantity }}</td>
        <td><form action="{{ url('/update_price') }}" method="POST">
                @csrf <!-- CSRF protection -->
                <input type="hidden" name="user_id" value="{{ $order->medicine_id }}">
                <input type="number" name="quantity" value="1" min="1" max="50" class="quantity-input">
                <td><button type="submit" class="order-medicine-link">Update</button><td>
            </form></td>
        <td>{{ $order->totalprice }}</td>

        <td><form action="{{ url('/cancel_order') }}" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{ $order->id }}">
    <button type="submit" class="cancel-medicine-link" onclick="return confirm('Are you sure you want to remove the medicine?')">Remove</button>
</form>
</td>

 
        

      </tr>
      @endforeach
    </tbody>
  </table>
  <div class="go-back-container">
    <!-- Display the total amount below the table -->
    <p>Total Amount: ${{ $totalAmount }}</p>
    </div>


    <div class="go-back-container">
    <a href="{{ url('') }}" class="confirm-link">&larr; Confirm Order</a>
  </div>
  <!-- Centered Go Back button -->
  <div class="go-back-container">
    <a href="{{ url('/home') }}" class="go-back-link">&larr; Go Back</a>
  </div>
</div>

</body>
</html>