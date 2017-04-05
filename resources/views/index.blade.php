<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0 , user-scalable=no">

        <meta name="description" content="">
        <meta name="author" content="">
        <title>Responsive Onepage HTML Template | Multi</title>
        <!-- core CSS -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet">
        <link href="{{ asset('css/owl.transitions.css') }}" rel="stylesheet">
        <link href="{{ asset('css/prettyPhoto.css') }}" rel="stylesheet">
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">
        <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->       
        <link rel="shortcut icon" href="images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('images/ico/apple-touch-icon-144-precomposed.png') }}">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('images/ico/apple-touch-icon-114-precomposed.png') }}">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('images/ico/apple-touch-icon-72-precomposed.png') }}">
        <link rel="apple-touch-icon-precomposed" href="{{ asset('images/ico/apple-touch-icon-57-precomposed.png') }}">


        <style>
            input[type=range] {
                -webkit-appearance: none;
                width: 100%;
                margin: 12.9px 0;
            }
            input[type=range]:focus {
                outline: none;
            }
            input[type=range]::-webkit-slider-runnable-track {
                width: 100%;
                height: 9.2px;
                cursor: pointer;
                box-shadow: 2.5px 2.5px 7.7px #007000, 0px 0px 2.5px #008a00;
                background: #00aa00;
                border-radius: 25px;
                border: 0.2px solid #009300;
            }
            input[type=range]::-webkit-slider-thumb {
                box-shadow: 2.9px 2.9px 7.5px #00a300, 0px 0px 2.9px #00bc00;
                border: 0px solid rgba(0, 255, 0, 0);
                height: 35px;
                width: 30px;
                border-radius: 8px;
                background: #fffdff;
                cursor: pointer;
                -webkit-appearance: none;
                margin-top: -13.1px;
            }
            input[type=range]:focus::-webkit-slider-runnable-track {
                background: #00af00;
            }
            input[type=range]::-moz-range-track {
                width: 100%;
                height: 9.2px;
                cursor: pointer;
                box-shadow: 2.5px 2.5px 7.7px #007000, 0px 0px 2.5px #008a00;
                background: #00aa00;
                border-radius: 25px;
                border: 0.2px solid #009300;
            }
            input[type=range]::-moz-range-thumb {
                box-shadow: 2.9px 2.9px 7.5px #00a300, 0px 0px 2.9px #00bc00;
                border: 0px solid rgba(0, 255, 0, 0);
                height: 35px;
                width: 30px;
                border-radius: 8px;
                background: #fffdff;
                cursor: pointer;
            }
            input[type=range]::-ms-track {
                width: 100%;
                height: 9.2px;
                cursor: pointer;
                background: transparent;
                border-color: transparent;
                color: transparent;
            }
            input[type=range]::-ms-fill-lower {
                background: #00a500;
                border: 0.2px solid #009300;
                border-radius: 50px;
                box-shadow: 2.5px 2.5px 7.7px #007000, 0px 0px 2.5px #008a00;
            }
            input[type=range]::-ms-fill-upper {
                background: #00aa00;
                border: 0.2px solid #009300;
                border-radius: 50px;
                box-shadow: 2.5px 2.5px 7.7px #007000, 0px 0px 2.5px #008a00;
            }
            input[type=range]::-ms-thumb {
                box-shadow: 2.9px 2.9px 7.5px #00a300, 0px 0px 2.9px #00bc00;
                border: 0px solid rgba(0, 255, 0, 0);
                height: 35px;
                width: 30px;
                border-radius: 8px;
                background: #fffdff;
                cursor: pointer;
                height: 9.2px;
            }
            input[type=range]:focus::-ms-fill-lower {
                background: #00aa00;
            }
            input[type=range]:focus::-ms-fill-upper {
                background: #00af00;
            }


            html, body {
                height: 100%;
                margin: 0;
                padding: 0;
            }




        </style>

    </head><!--/head-->

    <body id="home" class="homepage">

        <header id="header">
            <nav id="main-menu" class="navbar navbar-default navbar-fixed-top" role="banner">
                <div class="container">


                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="{{ url('/') }}"><img src="images/logo.png" alt="logo"></a>
                    </div>

                    <div class="collapse navbar-collapse navbar-right">

                        <ul class="nav navbar-nav">
                            <li class="scroll active"><a href="#home">Home</a></li>

                            @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                            @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                                </ul>
                            </li>
                            @endif


                        </ul>
                    </div>
                </div><!--/.container-->
            </nav><!--/nav-->
        </header><!--/header-->

        
        


        <section id="cta2">
            <div class="container">

                <img style="left: 50%; margin-top: 40px; margin-bottom: 10px;  float:left; " src="images/cta2/cta2-img.png" alt="" data-wow-duration="300ms" data-wow-delay="300ms">


                <h2 style="left: 50%; margin-top:  5%;  float:left; " class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms"> 
                    @if (Auth::check())<h2> 
                        Bienvenue dans votre espace
                    </h2>  
                    @endif

                    <span style="margin:auto;" > &nbsp;&nbsp; MOBILIS</span> WEB CLOUD

                </h2>


            </div>
        </section>

        <section id="login">
            @yield('content')
        </section>



    <footer id="footer"  position: absolute;  botom: 0;>
            <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2017 Mobilis. 
                </div>
                <div class="col-sm-6">
                    <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-github"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/mousescroll.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/jquery.inview.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/main.js"></script>

</body>
</html>