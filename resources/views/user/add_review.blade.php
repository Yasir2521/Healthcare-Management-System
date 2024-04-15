<!-- templates/hotel/review.html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review</title>
    <link rel="stylesheet" type="text/css" href="{% static 'css/review.css' %}">
    <style>
        /* Set background image */
        body {
            background-color: black;
            background-image: url('');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        /* Style for the review form container */
        .review-form-container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: rgba(155, 100, 0, 1); /* Transparent white background */
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.5); /* Add shadow for better visibility */
            margin-top: 20vh; /* Adjust the distance from the top */
        }

        /* Style for the review form heading */
        .review-form-heading {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
        }

        /* Style for the review form fields */
        .review-form-label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        .review-form-input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        /* Style for the star rating */
        .star-rating {
            unicode-bidi: bidi-override;
            direction: rtl;
            display: inline-block;
        }

        .star-rating input[type="radio"] {
            display: none;
        }

        .star-rating label {
            font-size: 30px;
            color: #ccc;
            float: right;
            padding: 5px;
            cursor: pointer;
        }

        .star-rating label:before {
            content: '★';
        }

        .star-rating input[type="radio"]:checked ~ label {
            color: #ffcc00;
        }

        /* Style for the submit button */
        .submit-button {
            background-color: #4CAF50;
            color: while;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 15px;
        }

        .submit-button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="review-form-container">
        @if(session()->has('message'))
        
        <div class = "alert alert-success">
            {{session()->get('message')}}
        
        </div>
        @endif
        <h1 class="review-form-heading">Submit Your Review</h1>
        <form action="{{url('upload_review')}}" mathod="POST" enctype="multipart/form-data">
            @csrf
            <div class="review-form-field">
                <label for="comment" class="review-form-label">Comment:</label>
                <textarea id="comment" name="comment" class="review-form-input" required></textarea>
            </div>
            <div class="review-form-field">
                <label for="rating" class="review-form-label">Rating:</label>
                <div class="star-rating">
                    <input type="radio" id="star5" name="rating" value="5">
                    <label for="star5"></label>
                    <input type="radio" id="star4" name="rating" value="4">
                    <label for="star4"></label>
                    <input type="radio" id="star3" name="rating" value="3">
                    <label for="star3"></label>
                    <input type="radio" id="star2" name="rating" value="2">
                    <label for="star2"></label>
                    <input type="radio" id="star1" name="rating" value="1">
                    <label for="star1"></label>
                </div>
            </div>
            <button type="submit" class="submit-button">Submit Review</button>
        </form>
        <a href="{{ url('/home') }}"><button type="submit" class="submit-button">Back</button></a>
    </div>
</body>
</html>
