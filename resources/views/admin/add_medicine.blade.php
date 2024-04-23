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
      
      <!-- partial:partials/_sidebar.html -->
  
   
      
      <!-- @include('admin.navbar') -->
        <!-- partial -->

      
    <div class="container-fluid page-body-wrapper">


        <div>
            @if(session()->has('message'))
            <div class = "alert alert-success">

               {{session()->get('message')}}

            </div>
            @endif
            <form action="{{url('upload_medicine')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <dev align="center">
                    <label>Medicine Name</label>
                    <input type="text" name ="name" placeholder="Write name" required="">

                </dev>

                <dev align="center">
                <label>Medicine Power</label>
                <input type="text" name="power" placeholder="Enter medicine power" required="">
           
                 </dev>


                <dev align="center">
                <label>Medicine Type</label>
                <input type="text" name="type" placeholder="Enter medicine type" required="">
                </dev>
                <dev align="center">
                <label>Amount</label>
                <input type="text" name="amount" placeholder="Enter medicine type" required="">
                </dev>
                
                <dev align="center">
                <label>Manufacture Date</label>
                <input type="date" name="manufacture_date" required="">
                </dev>
                <dev align="center">
                <label>Expiry Date</label>
                <input type="date" name="expiry_date" required="">
                </dev>
            
                <dev align="center">
                <label>Medicine for Disease</label>
                <select name="disease_type" required="">
                    <option value="">-- Select --</option>
                    <option value="Heart">Heart Disease</option>
                    <option value="Skin">Skin Disease</option>
                    <option value="Eye">Eye Disease</option>
                    <option value="Brain">Brain Disease</option>
                    <!-- Add more options as needed -->
                </select>
                </dev>

                <dev align="center">
                    <label>Medicine image</label>
                    <input type="file" name = "file" required="">
                    

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
