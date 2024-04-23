<!DOCTYPE html>
<html lang="en">
  <head>
    <style type="text/css">
        .container-fluid {
    padding: 20px;
}

.alert {
    padding: 15px;
    margin-bottom: 20px;
    border: 1px solid transparent;
    border-radius: .25rem;
}

.alert-success {
    color: #155724;
    background-color: #d4edda;
    border-color: #c3e6cb;
}

form {
    max-width: 400px;
    margin: 0 auto;
}

form label {
    display: block;
    margin-bottom: 5px;
}

form input[type="text"],
form input[type="date"],
form input[type="time"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box; /* Ensures padding and border are included in width */
}

form input[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: #28a745;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

form input[type="submit"]:hover {
    background-color: #218838;
}

a {
    display: inline-block;
    margin-top: 10px;
    color: #007bff;
    text-decoration: none;
}

a:hover {
    color: #0056b3;
}

</style>

   @include('admin.css')
   
  </head>
  <body>
    
      <!-- partial:partials/_sidebar.html -->
  
   
      @include('admin.navbar')
        <!-- partial -->

      
    <div class="container-fluid page-body-wrapper">


        <div>
            @if(session()->has('message'))
            <div class = "alert alert-success">
               {{session()->get('message')}}

            </div>
            @endif
            <form action="{{url('upload_seminar')}}" method="POST" >
                @csrf
                <dev align="center">
                    <label>Title</label>
                    <input type="text" name ="name" placeholder="Write Title" required="">

                </dev>

                <dev align="center">
                    <label>Date</label>
                    <input type="date" name ="date" placeholder="" required="">

                </dev>


                <dev align="center">
                    <label>Time</label>
                    <input type="time" name ="time" placeholder="" required="">

                </dev>

                <dev align="center">
                    <label>Description</label>
                    <input type="text" name ="description" placeholder="Write description" required="">
                    

                </dev>

                <dev align="center">
                    <input type="submit" class="btn btn-success">
                    

                </dev>
		        <a href="{{ url('/home') }}">BACK</a>


            </form>

        </div>

    </div>
  
    <!-- container-scroller -->
    <!-- plugins:js -->
    <!-- @include('admin.script') -->
  </body>

</html>
