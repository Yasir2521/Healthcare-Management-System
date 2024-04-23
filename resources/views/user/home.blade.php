<x-app-layout>
    <!DOCTYPE html>

    <html lang="en" dir="ltr">

    <head>
    <meta charset="utf-8">
    <title>Patient Dashboard</title>

    <style media="screen">
        /* Header Styles */
        header {
        position: fixed;
        background: #0097A7  ; /* Dark blue */
        padding: 20px;
        width: 100%;
        z-index: 1;
        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.5);
        }

        .left_area h3 {
        color: #fff;
        margin: 0;
        text-transform: uppercase;

        font-size: 20px;

        font-size: 21px;

        font-weight: 700;
        letter-spacing: 2px;
        }
       

        .logout_btn {
        padding: 8px 15px;
        background: #34495E; /* Red */
        text-decoration: none;
        float: right;
        margin-top: -28px;
        margin-right: 20px;
        border-radius: 20px;
        font-size: 16px;
        font-weight: 600;
        color: #fff;
        transition: background-color 0.3s ease;
        }

        .logout_btn:hover {
        background: #E8F6F3; /* Lighter red on hover */
        }

        /* Sidebar Styles */
        .sidebar {
        background: #0097A7  ; /* Dark blue */
        margin-top: 70px;
        padding-top: 30px;
        position: fixed;
        left: 0;
        width: 250px;
        height: 100%;
        transition: 0.5s;
        box-shadow: 2px 0px 5px rgba(0, 0, 0, 0.5);
        }

        .sidebar h4 {
        color: #fff;
        margin-top: 0;
        margin-bottom: 20px;
        font-size: 18px;
        font-weight: 600;
        }

        .sidebar a {
        color: #fff;
        display: block;
        width: 100%;
        line-height: 50px;
        text-decoration: none;
        padding-left: 20px;
        box-sizing: border-box;
        transition: background-color 0.3s ease;
        }

        .sidebar a:hover {
        background: #16a085; /* Green */
        }

        .sidebar i {
        padding-right: 10px;
        }

        /* General Styles */
        body {
        margin: 0;
        padding: 0;
        font-family: "Arial", sans-serif;
        background-color: #ecf0f1; /* Light gray */
        }

        .content {
        margin-left: 250px;
        background-color: #fff;
        min-height: calc(100vh - 100px);
        transition: 0.5s;
        padding-bottom: 100px;
        }

        footer {
        position: fixed;
        bottom: 0;
        width: 100%;
        background-color: #0097A7  ; /* Dark blue */
        color: #fff;
        text-align: center;
        padding: 30px 0;
        box-shadow: 0px -2px 5px rgba(0, 0, 0, 0.5);
        }
        footer a {
            color: #fff;
            margin: 0 10px;
        }
    
        footer a:hover {
            color: #19B3D3;
        }

        /* Sidebar Toggle Styles */
        label #sidebar_btn {
        z-index: 1;
        color: #fff;
        position: fixed;
        cursor: pointer;
        left: 300px;
        font-size: 20px;
        margin: 5px 0;
        transition: 0.5s;
        transition-property: color;
        }

        label #sidebar_btn:hover {
        color: #16a085; /* Green */
        }

        #check:checked~.sidebar {
        left: -190px;
        }

        #check:checked~.sidebar a span {
        display: none;
        }

        #check:checked~.sidebar a {
        font-size: 20px;
        margin-left: 170px;
        width: 80px;
        }

        /* Hide Checkbox */
        #check {
        display: none;
        }
    </style>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    </head>

    <body>

    <input type="checkbox" id="check">
    <!--header area start-->
    
    <header>
        <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
        </label>
        <div class="left_area">
        <h3>Patient Dashboard</h3>
        </div>
        
    </header>
    <!--header area end-->
    <!--sidebar start-->
    <div class="sidebar">
        <a href="{{url('user_view_appointments')}}"><i class="fas fa-address-card"></i><span>My Appointments</span></a>
        <a href="{{url('schedule_view')}}"><i class="fas fa-bullhorn"></i><span>Doctor's list</span></a>
        <a href="{{url('blood_view')}}"><i class="fas fa-address-card"></i><span>Available Bloods</span></a>
        <a href="{{url('medicine_view')}}"><i class="fas fa-address-card"></i><span>Available Medicines</span></a>
        <a href="{{url('seminar_view')}}"><i class="fas fa-bullhorn"></i><span>Seminar</span></a>
        <a href="{{url('vehicle_view')}}"><i class="fas fa-bullhorn"></i><span>Available Transports</span></a>
        <a href="{{url('review_view')}}"><i class="fas fa-bullhorn"></i><span>Give Feedback</span></a>
        <a href="{{url('see_review_view')}}"><i class="fas fa-bullhorn"></i><span>See Feedbacks</span></a>
        <a href="{{url('hospital_view')}}"><i class="fas fa-bullhorn"></i><span>Hospital's List</span></a>
        <a href="{{url('tip_view')}}"><i class="fas fa-bullhorn"></i><span>Doctor's Health Tips</span></a>
        
    
    </div>

        <!-- Content goes here -->

    <!-- Footer Section -->
    
    <!-- <footer>
        <i class="fab fa-facebook"></i>
        <i class="fab fa-whatsapp"></i>
        <i class="fab fa-instagram"></i>
        <i class="fab fa-google"></i>
    </footer> -->

    </body>

    </html>

</x-app-layout>
