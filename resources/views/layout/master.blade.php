<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>My Events : Smile for all.</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="assets/images/favicon.ico"/>
    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Slick slider -->
    <link href="{{ asset('assets/css/slick.css') }}" rel="stylesheet">
    <!-- Theme color -->
    <link id="switcher" href="{{ asset('assets/css/theme-color/green-theme.css') }}" rel="stylesheet">

    <!-- Main Style -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!-- Fonts -->

    <!-- Open Sans for body font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700,800" rel="stylesheet">
    <!-- Montserrat for title -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">



    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<!-- Start Header -->
<header id="mu-hero" class="" role="banner">
    <!-- Start menu  -->
    <nav class="navbar navbar-fixed-top navbar-default mu-navbar">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Logo -->
                <a class="navbar-brand" href="/">My Events</a>

            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav mu-menu navbar-right">
                    <li><a href="#mu-hero">Home</a></li>
                    <li><a href="#mu-about">About Us</a></li>
                    <li><a href="#mu-schedule">Inspiration</a></li>
                    <li><a href="#mu-speakers">Partners</a></li>
                    <li><a href="#mu-sponsors">Sponsors</a></li>
                    <li><a href="#mu-register">Register</a></li>
                    <li><a href="#mu-contact">Contact</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <!-- End menu -->

    <div class="mu-hero-overlay">
        <div class="container">
            <div class="mu-hero-area">

                <!-- Start hero featured area -->
                <div class="mu-hero-featured-area">
                    <!-- Start center Logo -->
                    <div class="mu-logo-area">
                        <!-- text based logo -->
                        <a class="mu-logo" href="#">My Events</a>
                        <!-- image based logo -->
                        <!-- <a class="mu-logo" href="#"><img src="assets/images/logo.jpg" alt="logo img"></a> -->
                    </div>
                    <!-- End center Logo -->

                    <div class="mu-hero-featured-content">

                        <h1>INTERNATIONAL DAY OF HAPPINESS 2019</h1>
                        <h2>The First Ever Celebration in Bangladesh</h2>
                        <p class="mu-event-date-line">20 March, 2019. Dhaka, Bangladesh</p>

                        <div class="mu-event-counter-area">
                            <div id="mu-event-counter">

                            </div>
                        </div>

                    </div>
                </div>
                <!-- End hero featured area -->

            </div>
        </div>
    </div>
</header>
<!-- End Header -->

@yield('content')

<!-- Start footer -->
<footer id="mu-footer" role="contentinfo">
    <div class="container">
        <div class="mu-footer-area">
            <div class="mu-footer-top">
                <div class="mu-social-media">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-youtube"></i></a>
                </div>
            </div>
            <div class="mu-footer-bottom">
                <p class="mu-copy-right">&copy; Copyright <a rel="nofollow" href="http://myevents.org">My Events</a>. All right reserved.</p>
            </div>
        </div>
    </div>

</footer>
<!-- End footer -->



<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<!-- Bootstrap -->
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<!-- Slick slider -->
<script type="text/javascript" src="{{ asset('assets/js/slick.min.js') }}"></script>
<!-- Event Counter -->
<script type="text/javascript" src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
<!-- Ajax contact form  -->
<script type="text/javascript" src="{{ asset('assets/js/app.js') }}"></script>



<!-- Custom js -->
<script type="text/javascript" src="{{ asset('assets/js/custom.js') }}"></script>




</body>

</html>
