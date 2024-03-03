<!DOCTYPE html>
<html lang="en">
  <head>
    <style type="text/css">
        label
        {
            display: inline-block;
            width: 200px;
        }
    </style>

   @include('admin.css')
   
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
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
            <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <dev align="center">
                    <label>Doctor Name</label>
                    <input type="text" name ="name" placeholder="Write name" required="">

                </dev>

                <dev align="center">
                    <label>Phone</label>
                    <input type="text" name ="number" placeholder="Write number" required="">

                </dev>


                <dev align="center">
                    <label>Speciality</label>
                    <select>
                        <option>--Select</option>
                        <option value="Heart">Heart</option>
                        <option value="Skin">Skin</option>
                        <option value="Eye">Eye</option>
                        <option value="Brain">Brain</option>
                        <option value="Medicine">Medicine</option>

                    </select>

                </dev>

                <dev align="center">
                    <label>Doctors Email</label>
                    <input type="text" name ="email" placeholder="Write email" required="">

                </dev>

                <dev align="center">
                    <label>Doctors image</label>
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
