<!DOCTYPE html>
<html lang="en">
    <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>HealthCare</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css2/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css2/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css2/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css2/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css2/owl.carousel.min.css">
      <link rel="stylesheet" href="css2/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    </head>
    <body>
      <!-- header section start -->
      <div class="header_section">
        <nav class="destop_header navbar navbar-expand-lg navbar-light bg-light">
          <div class="logo"></div>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              @if (Route::has('login'))
                  @auth
                      <a href="{{ url('/home') }}">Home</a>
                  @else

                      <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Log In</a>
                      </li>
                      @if (Route::has('register'))
                          <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Sign Up</a>
                          </li>
                      @endif
                      @if (Route::has('homepage'))

                          <li class="nav-item">
                            <a class="nav-link" href="{{ route('homepage') }}">About Us</a>
                          </li>
                      @endif
                      
                  @endauth
              @endif
              @if (Route::has('seminar'))
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('seminar')}}">Seminar</a>
                  </li>
              @endif

                  
                          
            </ul>
          </div>
        </nav>
        
      <!-- header section end -->
      <!-- banner section start -->
      <div class="banner_section">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 padding_0">
              <div id="main_slider" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="banner_bg">
                      <div class="banner_taital_main">
                        <h1 class="banner_taital">Welcome To<br>
                        Health Care   
                        <br>Management System</h1>
                        <p class="long_text">Every decision made, every system implemented, is a reflection of our dedication to healing and well-being. With precision and empathy, we orchestrate the symphony of healthcare, ensuring that every patient receives the highest quality of care.</p>
                        
                      </div>
                    </div>
                  </div>
                  
                    
                </div>
                
              </div>
            </div>
            <div class="col-md-6 padding_0">
              <div class="banner_img"></div>
            </div>
          </div>
        </div>
      </div>
      <!-- banner section end -->
      <!-- about section start -->
      <div class="about_section layout_padding">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6">
              <div class="about_taital">
                
                <h1 class="highest_text">Why Would You choose Us?</h1>
                <p class="lorem_text">In the realm of healthcare, each day presents an opportunity to make a profound difference in the lives of others. It's a calling rooted in compassion, where the desire to alleviate suffering and promote wellness serves as a guiding force. Whether at the bedside comforting a patient, in the lab researching new treatments, or in the boardroom shaping healthcare policy, the pursuit of better health for all is both a privilege and a responsibility. Choosing healthcare is choosing to be a beacon of hope, a champion of healing, and a catalyst for positive change in the world.</p>
                
              </div>
            </div>
            <div class="col-md-6">
              <div class="image_2" href="#"><img src="images/img-2.png"></div>
            </div>
          </div>
        </div>
      </div>
      <!-- about section end -->
      <!-- care section start -->
      
      <!-- care section end -->
      <!-- services section start -->
      <div class="services_section layout_padding">
        <div class="container">
          <div class="row">
            <div class="col-lg-4">
              <div class="call_box">
                <div class="call_image"><img src="images/call-icon.png"></div>
                <h2 class="emergency_text">Emergency Cases</h2>
                <h1 class="call_text">01992766448</h1>
                
              </div>
            </div>
            <div class="col-lg-4">
              <div class="call_box active">
                <div class="call_image"><img src="images/time-seat-icon.png"></div>
                <h2 class="emergency_text">Doctors timetable</h2>
                <h1 class="call_text">1-800-400-5768</h1>
                
              </div>
            </div>
            <div class="col-lg-4">
              <div class="call_box">
                <div class="call_image"><img src="images/watch-icon.png"></div>
                <h2 class="emergency_text">Opening hours</h2>
                <h1 class="call_text">24/7</h1>
                
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- services section end -->
      <!-- doctor section start -->
      <div class="doctor_section layout_padding">
        <div class="container">
          <div class="row">
            <div class="col-md-6 padding_top0">
              <h4 class="about_text">Best Laboratory</h4>
                <h1 class="highest_text">Tests Available</h1>
                
            </div>
            <div class="col-md-6">
              <div class="image_4"><img src="images/img-4.png"></div>
            </div>
          </div>
        </div>
      </div>
      <!-- doctor section end -->
      <!-- contact section start -->
      
      <!-- contact section end -->
      <!-- appointment section start -->
      <div class="appointment_section">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h3 class="need_text">Need a doctor for check-Up </h3>
              <h1 class="make_text">Don't Worry, You are At the Right Place </h1>
            </div>
            
          </div>
        </div>
      </div>
      <!-- appointment section end -->
      <!-- footer section start -->
      <!-- info section -->
    <div class="info_section layout_padding">
      <div class="container ">
        <div class="info_content">
              <div>
          <div class="row">
            <div class="col-md-4">
              <div class="d-flex">
                <h5>
                  Health Care
                </h5>
              </div>
              <div class="d-flex ">
                <ul>
                  <li>
                    <a href="">
                      About Us
                    </a>
                  </li>
                  <li>
                    <a href="">
                      About services
                    </a>
                  </li>
                  <li>
                    <a href="">
                      About Departments
                    </a>
                  </li>
                  <li>
                    <a href="">
                      Services
                    </a>
                  </li>
                  <li>
                    <a href="">
                      Contact Us
                    </a>
                  </li>
                </ul>
                <ul class="ml-3 ml-md-5">
                  <li>
                    <a href="">
                      Cancer Oncology
                    </a>
                  </li>
                  <li>
                    <a href="">
                      Dental Surgery
                    </a>
                  </li>
                  <li>
                    <a href="">
                      Diagnose & Research
                    </a>
                  </li>
                  <li>
                    <a href="">
                      Drug / Medicines
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-4">
              <div class="d-flex">
                <h5>
                  The Services
                </h5>
              </div>
              <div class="d-flex ">
                <ul>
                  <li>
                    <a href="">
                      About Us
                    </a>
                  </li>
                  <li>
                    <a href="">
                      About services
                    </a>
                  </li>
                  <li>
                    <a href="">
                      About Departments
                    </a>
                  </li>
                  <li>
                    <a href="">
                      Services
                    </a>
                  </li>
                  <li>
                    <a href="">
                      Contact Us
                    </a>
                  </li>
                </ul>
                <ul class="ml-3 ml-md-5">
                  <li>
                    <a href="">
                      Cancer Oncology
                    </a>
                  </li>
                  <li>
                    <a href="">
                      Dental Surgery
                    </a>
                  </li>
                  <li>
                    <a href="">
                      Diagnose & Research
                    </a>
                  </li>
                  <li>
                    <a href="">
                      Drug / Medicines
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-4">
              <div class="d-flex">
                <h5>
                  Departments
                </h5>
              </div>
              <div class="d-flex ">
                <ul>
                  <li>
                    <a href="">
                      About Us
                    </a>
                  </li>
                  <li>
                    <a href="">
                      About services
                    </a>
                  </li>
                  <li>
                    <a href="">
                      About Departments
                    </a>
                  </li>
                  <li>
                    <a href="">
                      Services
                    </a>
                  </li>
                  <li>
                    <a href="">
                      Contact Us
                    </a>
                  </li>
                </ul>
                <ul class="ml-3 ml-md-5">
                  <li>
                    <a href="">
                      Cancer Oncology
                    </a>
                  </li>
                  <li>
                    <a href="">
                      Dental Surgery
                    </a>
                  </li>
                  <li>
                    <a href="">
                      Diagnose & Research
                    </a>
                  </li>
                  <li>
                    <a href="">
                      Drug / Medicines
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex flex-column flex-lg-row justify-content-between align-items-center align-items-lg-baseline">
          <div class="social-box">
            <a href="">
              <img src="images/fb-icon.png" alt="" />
            </a>

            <a href="">
              <img src="images/twitter-icon.png" alt="" />
            </a>
            <a href="">
              <img src="images/linkedin-icon.png" alt="" />
            </a>
            <a href="">
              <img src="images/instagram-icon.png" alt="" />
            </a>
          </div>
          <div class="form_container mt-5">
            <form action="">
              <label for="subscribeMail">
                Newsletter
              </label>
              <input
                type="email"
                placeholder="Enter Your email"
                id="subscribeMail"
              />
              <button type="submit">
                Subscribe
              </button>
            </form>
          </div>
        </div>
        </div>
      </div>
    </div>
    <!-- end info section -->
    <!-- footer section end -->
    <!-- copyright section start -->
    
    <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js1/jquery.min.js"></script>
      <script src="js1/popper.min.js"></script>
      <script src="js1/bootstrap.bundle.min.js"></script>
      <script src="js1/jquery-3.0.0.min.js"></script>
      <script src="js1/plugin.js"></script>
      <!-- sidebar -->
      <script src="js1/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js1/custom.js"></script>
      <!-- javascript --> 
      <script src="js1/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   </body>
   </html>