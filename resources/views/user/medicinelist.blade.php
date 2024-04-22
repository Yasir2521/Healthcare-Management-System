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
</style>
</head>
<body>

<div class="container">
  <table>
    <thead>
      <tr>
        <th>Name</th>
        <th>Power</th>
        <th>Type</th>
        <th>Manufacture Date</th>
        <th>Expiry Date</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <!-- Assuming $add_medicine is an array or iterable -->
      @foreach ($add_medicine as $add_medicines)
      <tr>
        <td>{{ $add_medicines->name }}</td>
        <td>{{ $add_medicines->power }}</td>
        <td>{{ $add_medicines->type }}</td>
        <td>{{ $add_medicines->manufacture_date }}</td>
        <td>{{ $add_medicines->expiry_date }}</td>
        <td><a href="#" class="order-medicine-link">Order Medicine</a></td> <!-- Added class for button-like styling -->
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