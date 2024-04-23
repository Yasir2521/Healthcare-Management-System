

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Reviews</title>
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
            background-color: #f2f2f2;
        }

        .table tbody tr:hover {
            background-color: #f5f5f5;
        }
        .button {
    display: inline-block;
    background-color: #007bff;
    color: #ffffff;
    text-decoration: none;
    padding: 10px 20px;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.button:hover {
    background-color: #0056b3;
}

    </style>
</head>
<body>

<div class="container">
    <h1>Feedbacks from Patients</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Date</th>
                <th>Review</th> <!-- Change to the appropriate field -->
                
                
                
                 
                

                <th>Rating</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($reviwe as $reviwes )
                <tr>
                    <td>{{ $reviwes->created_at }}</td>
                    <td>{{ $reviwes->comment }}</td>
                    
                    
                    

                    <td>
                        @for ($i = 0; $i < $reviwes->rating; $i++)
                            ⭐
                        @endfor
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="http://127.0.0.1:8000/" class="button">Go Back</a>
</div>


