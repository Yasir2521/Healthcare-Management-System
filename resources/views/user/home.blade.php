<<x-app-layout>

    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 960px;
            margin: 20px auto;
            padding: 0 20px;
        }
        .header {
        background-color: #007BFF; /* Blue background color */
        color: #fff; /* White text color */
        padding: 20px; /* Padding around the content */
        text-align: center; /* Center-align the content */
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Add a subtle shadow */
    }

        .header h1 {
            margin: 0; /* Remove default margin for h1 */
            font-size: 24px; /* Increase font size for the heading */
            font-weight: bold; /* Apply bold font weight */
        }

        .dashboard {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }
        .sidebar {
            width: 20%;
            background-color: #fff;
            border: 1px solid #ddd;
            padding: 20px;
        }
        .main-content {
            width: 75%;
            background-color: #fff;
            border: 1px solid #ddd;
            padding: 20px;
        }
        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }
        .sidebar li {
            margin-bottom: 10px;
        }
        .sidebar a {
            text-decoration: none;
            color: #333;
            display: block;
            padding: 10px;
            transition: background-color 0.3s ease;
        }
        .sidebar a:hover {
            background-color: #f0f0f0;
        }
        .content-heading {
            border-bottom: 2px solid #4CAF50;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
    </style>
    </head>
    <body>
    <div class="container">
        <div class="header">
            <h1>Patient Dashboard</h1>
        </div>
        <div class="dashboard">
            <div class="sidebar">
                <ul>
                    <!-- <li><a href="#">Profile</a></li> -->
                    <li><a href="{{url('appointment_view')}}">Appointments</a></li>
                    <li><a href="#">Medical Records</a></li>
                    <li><a href="#">Prescriptions</a></li>
                    <li><a href="#">Payments</a></li>
                    <li><a href="#">Emergency</a></li>
                </ul>
            </div>
            <!-- <div class="main-content">
                <h2 class="content-heading">Welcome, John Doe!</h2>
                <p>This is your patient dashboard. You can view your profile information, upcoming appointments, medical records, prescriptions, and make payments here.</p>
                <p>Feel free to navigate through the sidebar links to access different sections of the dashboard.</p>
            </div> -->
        </div>
    </div>
    </body>
    </html>

</x-app-layout>