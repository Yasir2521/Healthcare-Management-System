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
  .doctor-list {
    list-style: none;
    padding: 0;
  }
  .doctor-item {
    margin-bottom: 20px;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  }
  .doctor-item img {
    width: 100px;
    height: 100px;
    object-fit: cover;
    border-radius: 50%;
    margin-right: 20px;
    float: left;
  }
  .doctor-info {
    overflow: hidden; /* Clear floats */
  }
  .doctor-info h3 {
    margin: 0;
    color: #333;
    font-size: 20px;
  }
  .doctor-info p {
    margin: 5px 0;
    color: #666;
    font-size: 16px;
  }
  .doctor-info a {
    color: #007bff;
    text-decoration: none;
  }
  .doctor-info a:hover {
    text-decoration: underline;
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
  <ul class="doctor-list">
    @foreach ($doctor as $doctors)
      <li class="doctor-item">
        <img src="doctorimage/{{$doctors->image}}" alt="Doctor Image">
        <div class="doctor-info">
          <h3>{{ $doctors->name }}</h3>
          <p>Phone: {{ $doctors->phone }}</p>
          <p>Email: <a href="mailto:{{ $doctors->email }}">{{ $doctors->email }}</a></p>
        </div>
      </li>
    @endforeach
  </ul>
  
  <!-- Button to go back -->
  <a href="{{ url('/home') }}" class="go-back-link">&larr; Go Back</a>
</div>

</body>
</html>
