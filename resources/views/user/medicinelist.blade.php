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
    background-color: #007bff;
    color: white;
  }
  tr:nth-child(even) {
    background-color: #f2f2f2;
  }
  tr:hover {
    background-color: #ddd;
  }
  .doctor-image {
    width: 100px;
    height: auto;
  }
  .go-back-link {
    display: inline-block;
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    text-decoration: none;
    border-radius: 4px;
    transition: background-color 0.3s ease;
  }
  .go-back-link:hover {
    background-color: #0056b3;
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

      </tr>
    </thead>
    <tbody>
      @foreach ($add_medicine as $add_medicines)
      <tr>
        
        <td>{{ $add_medicines->name }}</td>
        <td>{{ $add_medicines->power }}</td>
        <td>{{ $add_medicines->type }}</td>
        <td>{{ $add_medicines->manufacture_date }}</td>
        <td>{{ $add_medicines->expiry_date }}</td>
        
      </tr>
      @endforeach
    </tbody>
  </table>
  
  <!-- Button to go back -->
  <a href="{{ url('/home') }}" class="go-back-link">&larr; Go Back</a>
</div>

</body>
</html>
