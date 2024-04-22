<x-app-layout>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Doctor Dashboard</title>

  <style media="screen">
    /* Header Styles */
    header {
      position: fixed;
      background: #2c3e50; /* Changed dark grey to a different shade */
      padding: 20px;
      width: 100%;
      z-index: 1;
      box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.5);
    }

    .left_area h3 {
      color: #fff;
      margin: 0;
      padding: -15px;
      text-transform: uppercase;
      font-size: 21px;
      font-weight: 700;
      letter-spacing: 2px;
    }

    .logout_btn {
      padding: 8px 15px;
      background: #ff8800; /* Changed logout button color */
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
      background: #ff6600;
    }

    /* Sidebar Styles */
    .sidebar {
      background: #34495e; /* Changed sidebar background color */
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
      color: #ccc;
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
      background: #e67e22; /* Changed hover color */
    }

    .sidebar i {
      padding-right: 10px;
    }

    /* General Styles */
    body {
      margin: 0;
      padding: 0;
      font-family: "Arial", sans-serif;
      background-color: #ecf0f1; /* Changed body background color */
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
      background-color: #2c3e50; /* Changed footer background color */
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
      color: #e67e22; /* Changed toggle hover color */
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
      <h3>Doctor Dashboard</h3>
    </div>
  </header>
  <!--header area end-->
  <!--sidebar start-->
  <div class="sidebar">
    <a href="/admin-dashboard"><i class="fas fa-desktop"></i><span>Profile</span></a>
    <a href="/admin-teacher"><i class="fas fa-chalkboard-teacher"></i><span>Appointments</span></a>
    <a href="/admin-student"><i class="fas fa-user-graduate"></i><span>Patient Details</span></a>
    <a href="{{url('doctorscheduleview')}}"><i class="fas fa-address-card"></i><span>Schedules</span></a>
    <a href="/admin-fee"><i class="fas fa-search-dollar"></i><span>Emergency</span></a>
    <a href="{{url('seminar_view')}}"><i class="fas fa-search-dollar"></i><span>Seminar</span></a>
  </div>
  
    <!-- Content goes here -->

  <!-- Footer Section -->
 
  <footer>
    <i class="fab fa-facebook"></i>
    <i class="fab fa-whatsapp"></i>
    <i class="fab fa-instagram"></i>
    <i class="fab fa-google"></i>
  </footer>

</body>

</html>
</x-app-layout>
