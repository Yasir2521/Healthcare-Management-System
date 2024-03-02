<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Health</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
  <link rel="stylesheet" type="text/css" href="css1/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css1/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css1/style.css">
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
  <section id="banner" class="banner">
    <div class="bg-color">
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="col-md-12">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
              <a class="navbar-brand" href="#"><img src="img/logo.png" class="img-responsive" style="width: 140px; margin-top: -16px;"></a>
            </div>
            <div class="collapse navbar-collapse navbar-right" id="myNavbar">
              <ul class="nav navbar-nav">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else

                        <li class="active"><a href="{{ route('login') }}">Log In</a></li>
                        @if (Route::has('register'))

                            <li class=""><a href="{{ route('register') }}">Sign Up</a></li>
                        @endif
                        @if (Route::has('homepage'))

                            <li class=""><a href="{{ route('homepage') }}">About Us</a></li>
                        @endif
                    @endauth
                @endif
            
              </ul>
            </div>
          </div>
        </div>
      </nav>
      <div class="container">
        <div class="row">
          <div class="banner-info">
            <div class="banner-logo text-center">
              <img src="img/logo.png" class="img-responsive" style="width: 80px; margin-top: -16px;">
            </div>
            <div class="banner-text text-center">
              <h1 class="white">Welcome to Health Care Management System</h1>
              <p>Our platform is designed to streamline and optimize healthcare processes, providing efficient management solutions for healthcare facilities and practitioners.</p>
            </div>
            <div class="overlay-detail text-center">
              <a href="#service"><i class="fa fa-angle-down"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>