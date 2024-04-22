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
  background-color: #8e24aa; /* Violet */
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

/* Additional Colorful Styles */

th, td {
  transition: background-color 0.3s ease, color 0.3s ease;
}

th {
  background-color: #f06292; /* Pink */
}

tr:nth-child(even) {
  background-color: #90caf9; /* Light Blue */
}

tr:hover {
  background-color: #ffccbc; /* Light Orange */
}

.go-back-link:hover {
  background-color: #388e3c; /* Dark Green */
}

.container {
  max-width: 800px;
  margin: 0 auto;
  padding: 20px;
  display: flex;
  flex-direction: column;
  align-items: center;
}

.take-appointment-link {
  display: inline-block;
  padding: 10px 20px;
  background-color: #007bff;
  color: #fff;
  text-decoration: none;
  border-radius: 4px;
  transition: background-color 0.3s ease;
  margin-top: 10px;
}

.take-appointment-link:hover {
  background-color: #0056b3;
}
</style>
</head>
<body>

<div class="container">
  <table>
    <thead>
      <tr>
        <th>Doctor's Name</th>
        <th>Specialty</th>
        <th>Schedules</th>
        <th>Time</th>
        <th>Action</th> <!-- Added a new column for actions -->
      </tr>
    </thead>
    <tbody>
      @foreach ($schedule as $schedules)
        <tr>
          <td>
            @if ($schedules->user)
              {{ $schedules->user->name }}
            @else
              No User Assigned
            @endif
          </td>
          <td>{{ $schedules->specialty }}</td>
          <td>{{ $schedules->appointment_days }}</td>
          <td>{{ $schedules->time }}</td>
          <td><a href="#" class="take-appointment-link">Take Appointment</a></td> <!-- Changed to anchor tag for better visibility -->
        </tr>
      @endforeach
    </tbody>
  </table>
  
  <!-- Button to go back -->
  <a href="{{ url('/home') }}" class="go-back-link">&larr; Go Back</a>
</div>

</body>
</html>
