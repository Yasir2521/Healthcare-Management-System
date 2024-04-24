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

<div class="container">
@if(session()->has('message'))

<div class = "alert alert-success">


    {{session()->get('message')}}

</div>
@endif
  <table>
    <thead>
        <tr>
            <th>Medicine - Power - Quantity</th>
            <th>Total Price</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($orders as $order)
        <tr>
            <td>
                <select>
                    @foreach (json_decode($order->order_list) as $item)
                    <option>{{ $item->name }} - {{ $item->power }} - {{ $item->quantity }}</option>
                    @endforeach
                </select>
            </td>
            <td>{{ $order->total_price }}</td>
        </tr>
        @endforeach
    </tbody>
</table>


  
  <!-- Centered Go Back button -->
  <div class="go-back-container">
    <a href="{{ url('/home') }}" class="go-back-link">&larr; Go Back</a>
  </div>
</div>

</body>
</html>