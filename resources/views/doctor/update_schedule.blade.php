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
        <th>Specialty</th>
        <th>Schedules</th>
        <th>Time</th>
        
      </tr>
    </thead>
    <tbody>
      @foreach ($schedule as $schedules)
        <tr>
          <td>{{ $schedules->specialty }}</td>
          <td>{{ $schedules->appointment_days }}</td>
          <td>{{ $schedules->time }}</td>
          
        </tr>
      @endforeach
    </tbody>
  </table>
  

</div>

</body>
</html>






<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Create Doctor Schedule</title>
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
    input[type="text"], input[type="date"], input[type="time"], select, input[type="submit"] {
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
            @if(session()->has('message'))
            <div class = "alert alert-success">

               {{session()->get('message')}}

            </div>
            @endif
    <h1>Create Doctor Schedule</h1>
    <form action="{{url('updated_schedule')}}" method="post" enctype="multipart/form-data">
        

      @csrf


        <label for="specialty">Specialty:</label>
        <input type="text" id="specialty" name="specialty" placeholder="Enter Speciality" required>
        <label>Appointment Days:</label>
        <div>
            <input type="checkbox" id="monday" name="appointment_days[]" value="Monday">
            <label for="monday">Monday</label>
        </div>
        <div>
            <input type="checkbox" id="tuesday" name="appointment_days[]" value="Tuesday">
            <label for="tuesday">Tuesday</label>
        </div>
        <div>
            <input type="checkbox" id="wednesday" name="appointment_days[]" value="Wednesday">
            <label for="wednesday">Wednesday</label>
        </div>
        <div>
            <input type="checkbox" id="thursday" name="appointment_days[]" value="Thursday">
            <label for="thursday">Thursday</label>
        </div>
        <div>
            <input type="checkbox" id="friday" name="appointment_days[]" value="Friday">
            <label for="friday">Friday</label>
        </div>
        <!-- Add more days as needed -->
        <label for="date">Date:</label>
        <input type="date" id="date" name="date" required>
        <label for="time">Time:</label>
        <input type="time" id="time" name="time" required>
       
        </select>
        <input type="submit" value="Update Schedule">

        <a href="{{ url('/home') }}">BACK</a>
    </form>
</div>

</body>
</html>

