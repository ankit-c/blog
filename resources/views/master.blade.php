<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CehV9</title>
        <link href="{{ URL::asset('/css/style.css') }}" rel="stylesheet" type="text/css">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <!-- Styles -->
        	<meta name="description" content="Test Website" />
        	<meta name="keywords" content="html template, css, free, one page, web design" />
        	<meta name="author" content="Ankit" />
        	<!-- Favicons (created with http://realfavicongenerator.net/)-->
        	<link rel="apple-touch-icon" sizes="57x57" href="{{ URL::asset('/img/favicons/apple-touch-icon-57x57.png') }}">
        	<link rel="apple-touch-icon" sizes="60x60" href="{{ URL::asset('/img/favicons/apple-touch-icon-60x60.png') }}">
        	<link rel="icon" type="image/png" href="{{ URL::asset('/img/favicons/favicon-32x32.png') }}" sizes="32x32">
        	<link rel="icon" type="image/png" href="{{ URL::asset('/img/favicons/favicon-16x16.png') }}" sizes="16x16">
        	<link rel="manifest" href="{{ URL::asset('/img/favicons/manifest.json') }}">
        	<link rel="shortcut icon" href="{{ URL::asset('/img/favicons/favicon.ico') }}">
        	<meta name="msapplication-TileColor" content="#00a8ff">
        	<meta name="msapplication-config" content="{{ URL::asset('/img/favicons/browserconfig.xml') }}">
        	<meta name="theme-color" content="#ffffff">
        	<!-- Normalize -->
        	<link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/normalize.css') }}/">
        	<!-- Bootstrap -->
        	<link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/bootstrap.css') }}">
        	<!-- Owl -->
        	<link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/owl.css') }}">
        	<!-- Animate.css -->
        	<link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/animate.css') }}">
        	<!-- Font Awesome -->
        	<link rel="stylesheet" type="text/css" href="{{ URL::asset('/fonts/font-awesome-4.1.0/css/font-awesome.min.css') }}">
        	<!-- Elegant Icons -->
        	<link rel="stylesheet" type="text/css" href="{{ URL::asset('/fonts/eleganticons/et-icons.css') }}">
        	<!-- Main style -->
        	<link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/cardio.css') }}">
        </head>

        <body>
        	<div class="preloader">
        		<img src="{{ url('/img/loader.gif') }}" alt="Preloader image">
        	</div>
        	<nav class="navbar">
        		<div class="container">
        			<!-- Brand and toggle get grouped for better mobile display -->
        			<div class="navbar-header">
        				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        					<span class="sr-only">Toggle navigation</span>
        					<span class="icon-bar"></span>
        					<span class="icon-bar"></span>
        					<span class="icon-bar"></span>
        				</button>
        				<a class="navbar-brand" href="#"><img src="{{ setting('site.logo') }}" data-active-url="{{ setting('site.logo') }}" alt=""></a>
        			</div>
        			<!-- Collect the nav links, forms, and other content for toggling -->
        			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        				<ul class="nav navbar-nav navbar-right main-nav">
        					{{ menu('Main_menu','bootstrap') }}
        					<!-- <li><a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-blue">Sign Up</a> -->
                  <div class=" position-ref ">
                    @if (Route::has('login'))
                        <div class="top-right links">
                            @auth
                                <a href="{{ url('/home') }}"></a>
                            @else
                                <a href="{{ route('login') }}">Login</a>
                                <a href="{{ route('register') }}">Register</a>
                            @endauth
                        </div>
                    @endif
                  </div>
        				</ul>
        			</div>
        			<!-- /.navbar-collapse -->
        		</div>
        		<!-- /.container-fluid -->
        	</nav>



            @yield('content')


          <footer>
        		<div class="container">
        			<div class="row">
        				<div class="col-sm-6 text-center-mobile">
        					<h3 class="white">Find Me Here <span class="map-blink"> <img src="{{ url('/img/map.png')}}" alt="location_logo"/></span></h3>
        					<h5 class="light regular light-white">Drop In For A Cup Of Coffee</h5>

        				</div>
        				<div class="col-sm-6 text-center-mobile">
        					<h3 class="white">Opening Hours</h3>
        					<div class="row opening-hours">
        						<div class="col-sm-6 text-center-mobile">
        							<h5 class="light-white light">Mon - Fri</h5>
        							<h3 class="regular white">9:00 - 22:00</h3>
        						</div>
        						<div class="col-sm-6 text-center-mobile">
        							<h5 class="light-white light">Sat - Sun</h5>
        							<h3 class="regular white">10:00 - 18:00</h3>
        						</div>
        					</div>
        				</div>
        			</div>
        			<!-- <div class="row bottom-footer text-center-mobile"> -->

                <div class="col-md-12">
                  <p>&copy; 2017 All Rights Reserved.</p>
                  <p class="text-center">Made With <span class="love">❤</span></i> By <strong>Ankit Chandgadkar</strong></p>
        				</div>
        				<div class="col-sm-4 col-md-12 text-right text-center-mobile">

        					<ul class="social-footer">
        						<li><a href="http://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
        						<li><a href="http://www.twitter.com/_ankit_c"><i class="fa fa-twitter"></i></a></li>
        						<li><a href="https://plus.google.com/u/0/+ankitchandgadkar"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="https://www.linkedin.com/in/ankit-chandgadkar/"><i class="fa fa-linkedin"></i></a></li>
        					</ul>
        				</div>
        			</div>
        		</div>
        	</footer>
        	<!-- Holder for mobile navigation -->
        	<div class="mobile-nav">
        		<ul>
        		</ul>
        		<a href="#" class="close-link"><i class="arrow_up"></i></a>
        	</div>
        	<!-- Scripts -->
          <!-- <script>
      function initMap() {
        var uluru = {lat: -25.363, lng: 131.044};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBa4BWsOe_0FXUh21yqV7i3Wk4H1B7-Vlg&callback=initMap">
    </script> -->
        	<!-- Scripts -->
        	<script src="js/jquery-1.11.1.min.js"></script>
        	<script src="js/owl.carousel.min.js"></script>
        	<script src="js/bootstrap.min.js"></script>
        	<script src="js/wow.min.js"></script>
        	<script src="js/typewriter.js"></script>
        	<script src="js/jquery.onepagenav.js"></script>
        	<script src="js/main.js"></script>
        </body>

        </html>
