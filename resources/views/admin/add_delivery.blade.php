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
form input[type="file"],
form select {
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
    <div class="container-scroller">
      @include('admin.sidebar')
     

      
    <div class="container-fluid page-body-wrapper">



      <div>

        <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <dev align="center">
                <label>First Name</label>
                <input type="text" name ="name" placeholder="Write name" required="">

            </dev>
            <dev align="center">
                <label>Last Name</label>
                <input type="text" name ="name" placeholder="Write name" required="">

            </dev>

            
            <dev align="center">
                <label>Phone</label>
                <input type="text" name ="number" placeholder="Write number" required="">

            </dev>

            <dev align="center">
                <label>Email</label>
                <input type="text" name ="email" placeholder="Write email" required="">

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
    @include('admin.script')
  </body>

</html>
