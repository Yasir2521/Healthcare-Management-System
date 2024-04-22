
<!DOCTYPE html>
<html lang="en">
<head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Take Appointment</title>
        <link rel="stylesheet" href="appointment.css">
        <style>
            /* CSS for Appointment Form */

    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f8f8f8;
    }

    .container {
        width: 60%;
        margin: 50px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
        text-align: center;
        color: #333;
    }

    form {
        margin-top: 20px;
    }

    label {
        font-weight: bold;
        display: block;
        margin-bottom: 5px;
        color: #333;
    }

    input[type="text"],
    input[type="number"],
    select {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    select {
        appearance: none;
        -webkit-appearance: none;
        -moz-appearance: none;
        background: url('data:image/svg+xml;utf8,<svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M2.94974 7.34315C2.55984 7.73306 2.55984 8.36694 2.94974 8.75685L9.5858 15.3929C9.9767 15.7828 10.6096 15.7828 10.9995 15.3929L17.6356 8.75685C18.0255 8.36694 18.0255 7.73306 17.6356 7.34315C17.2457 6.95324 16.6119 6.95324 16.222 7.34315L10.4995 13.0656L4.77702 7.34315C4.38711 6.95324 3.75324 6.95324 3.36333 7.34315C2.97342 7.73306 2.97342 8.36694 3.36333 8.75685L9.00005 14.3939L9.00005 2C9.00005 1.44772 9.44777 1 10 1C10.5523 1 11 1.44772 11 2L11 14.3939L16.6361 8.75685C17.026 8.36694 17.6599 8.36694 18.0498 7.97603C18.4397 7.58611 18.4397 6.95224 18.0498 6.56233L11.4147 0.927273C11.0248 0.537362 10.3919 0.537362 10.002 0.927273L3.36694 7.56233C2.97703 7.95224 2.97703 8.58611 3.36694 8.97603C3.75685 9.36594 4.39072 9.36594 4.78063 8.97603L10.4995 3.25715L16.2184 8.97603C16.6083 9.36594 17.2422 9.36594 17.6321 8.97603C18.022 8.58611 18.022 7.95224 17.6321 7.56233L11.9961 1.92627C11.6062 1.53636 10.9733 1.53636 10.5834 1.92627L4.94738 7.56233C4.55747 7.95224 4.55747 8.58611 4.94738 8.97603C5.33729 9.36594 5.97116 9.36594 6.36107 8.97603L10 5.33715L13.6389 8.97603C14.0288 9.36594 14.6627 9.36594 15.0526 8.97603C15.4425 8.58611 15.4425 7.95224 15.0526 7.56233L11.4147 3.92427Z"/></svg>') no-repeat;
        background-position: calc(100% - 10px) center;
    }

    input[type="submit"] {
        width: 100%;
        padding: 10px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    input[type="submit"]:hover {
        background-color: #0056b3;
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
        <h1>Take Appointment</h1>
        <form action="{{url('submit_appointment')}}" method="post">
            @csrf
            <div class="form-group">
                
                <label for="doctor_name">Doctor Name</label>
                <input type="text" id="doctor_name" name="doctor_name" placeholder="Enter the doctor's name" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>
            </div>
            <div class="form-group">
                <label for="sex">Sex</label>
                <select id="sex" name="sex" required>
                    <option value="" disabled selected>Select</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
            <div class="form-group">
                <label for="specialty">Specialty for consultation</label>
                <select id="specialty" name="specialty" required>
                    <option value="" disabled selected>--Select</option>
                    <option value="Accident and Emergency">Accident and Emergency</option>
                    <option value="Cancer Care">Cancer Care</option>
                    <option value="Cardiology">Cardiology</option>
                    <option value="Counsellor">Counsellor</option>
                    <option value="Dental and Maxillofacial Surgery">Dental and Maxillofacial Surgery</option>
                    <option value="Dialysis">Dialysis</option>
                    <option value="Orthopaedics">Orthopaedics</option>
                </select>
            </div>
            <div class="form-group">
                <input type="submit" href="{{url('/submit_appointment')}}" value="Request Appointment">
            </div>
            <div class="form-group">
                <a href="{{ url('/home') }}">BACK</a>
            </div>
        </form>
    </div>
</body>
</html>
