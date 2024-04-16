

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor's Schedule</title>
    <style>
body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5; /* Optional: Set a background color */
    margin: 0;
    padding: 0;
}

.container {
    margin: 50px auto;
    width: 80%;
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.button {
    display: inline-block;
    background-color: #007bff; /* Blue */
    color: #ffffff; /* Text color */
    text-decoration: none;
    padding: 10px 20px;
    border-radius: 5px;
    transition: background-color 0.3s;
    margin-top: 20px; /* Add margin for spacing */
}

.button:hover {
    background-color: #0056b3; /* Darker Blue on Hover */
}


.table {
    width: 100%;
    border-collapse: collapse;
}

.table th, .table td {
    padding: 8px;
    border: 1px solid #dddddd;
    text-align: left;
}

.table th {
    background-color: #ba68c8; /* Violet */
    color: white; /* Text color */
}

.table tbody tr:hover {
    background-color: #e1bee7; /* Light Violet */
}



    </style>
</head>
<body>

<div class="container">
    <h1>Doctors and Their Schedules</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Doctor's Name</th>
                <th>Specialty</th> <!-- Change to the appropriate field -->
                <th>Appointment Days</th> <!-- Change to the appropriate field -->
                <th>Time</th>
                 
                
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
                    
                    <!-- Add more columns as needed -->
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ url('/home') }}" class="button">Go Back</a>

</div>

