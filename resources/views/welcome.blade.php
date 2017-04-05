Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius<!DOCTYPE html>
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
            html, body {
                height: 100%;
                margin: 0;
                padding: 0;
            }
            #map {
                height: 100%;
            }


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
                        <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="logo"></a>
                    </div>

                    <div class="collapse navbar-collapse navbar-right">
                        <ul class="nav navbar-nav">
                            <li class="scroll active"><a href="#home">Home</a></li>
                            <li class="scroll"><a href="#cta">Discription</a></li>
                            <li class="scroll"><a href="#avantage">Avantage</a></li> 
                            <li class="scroll"><a href="#offres">Offres</a></li>
                            <li class="scroll"><a href="#simuateur">Simulateur</a></li>

                            <li class="scroll"><a href="#team">Equipe</a></li> 
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

        @include('layouts.header')

        <section id="cta"  style="padding: 10% 0% 0% 0% ; background-image: url(images/cta2/web22.jpeg); background-size: 100% 100%;    background-repeat: no-repeat;">
            
                <div class="container">

                    <div class="section-header">
                        <h2 class="section-title text-center wow fadeInDown" >Stratigie</h2>
                        <p class="text-center wow fadeInDown">Afin de répendre aux besoins de nos clients, nous avons classé les offres Mobilis cloud sous trois grandes types de service </p>
                    </div>
                    <br>
                    <div class="col-sm-6 wow fadeInRight">
                        <b> <p style="font-size: 25px"  class="column-title">Nouvelle strategie évolutife</p> </b>
                        <p style=" color: black" class="wow fadeInDown" >A travers cette plateforme, nous visant a aporter une nouvelle aproche de commercialisation des services de notre socité, dont nous visant d'accerir des nouveau part de marché autre que le marché de la télécommunications mobiles.</p>

                    </div>

                </div>
        </section>
        
        


        @yield('content');

        <section style="padding: 10% 0% 0% 0% ;" id="offres">
            <div class="container">
                <div class="section-header">
                    <h2 class="section-title text-center wow fadeInDown">Nos offres</h2>
                    <p class="text-center wow fadeInDown">Afin de répendre aux besoins de nos clients, nous avons classé les offres Mobilis cloud sous trois grandes types de service </p>
                </div>
                <div class="row">
                    <div class="col-sm-6 wow fadeInLeft">
                        <img class="img-responsive" src="images/main-feature.png" alt="">
                    </div>

                    <div class="col-sm-6">
                        <div class="media service-box wow fadeInRight">
                            <div class="pull-left">
                                <i> 

                                    &nbsp; &nbsp;&nbsp;

                                </i><img style="padding: 8% 5% 5% 5% "  >  
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Offre standart</h4>
                                <p>Cette offres admit un choix de entre trois types de systemes d'exploitation a savoire:</p>

                                <ul class="nostyle">
                                    <li><i class="fa fa-check-square"></i> CentOs</li>
                                    <li><i class="fa fa-check-square"></i> RedHat</li>
                                    <li><i class="fa fa-check-square"></i> Windous</li>
                                </ul>
                            </div>
                        </div>

                        <div class="media service-box wow fadeInRight">
                            <div class="pull-left">
                                <i class="fa fa-cubes"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Offre Infrastructure</h4>
                                <p>Un formulaire sera mis en place afin de detailler les be soint en terme de :</p>

                                <ul class="nostyle">
                                    <li><i class="fa fa-check-square"></i> Nombre de VCPU</li>
                                    <li><i class="fa fa-check-square"></i> Taille memoire</li>
                                    <li><i class="fa fa-check-square"></i> Taille stockage </li>
                                    <li><i class="fa fa-check-square"></i> Nombre d'adresse ip ou VLAN </li>
                                </ul>

                            </div>
                        </div>

                        <div class="media service-box wow fadeInRight">
                            <div class="pull-left">
                                <i class="fa fa-pie-chart"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Offre Serveur Web</h4>
                                <p>Cette offre vous permet de benificier d'un hébergement de vos plateformes Web, en precisant les detaille de vos besoint en terme de recources.</p>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </section>

        <section style=" padding: 10% 0% 5% 0%; background-image:url(images/cta2/avantage.jpeg);    background-size: 100% 100%;    background-repeat: no-repeat;" id="avantage">
            <div class="container">

                <div class="section-header">
                    <h2 class="section-title text-center wow fadeInDown">Avantages</h2>
                    <p class="text-center wow fadeInDown">Qu'elle est les points fort qui vous poussent d'adopter une solution cloud <br> a votre entreprise?</p>
                </div>

                <div class="row">

                    <div class="col-sm-6 wow fadeInRight">
                        <b> <p style="font-size: 25px"  class="column-title">Avantages d'usage du cloud</p> </b>
                        <p style=" color: black" class="lead" >Face à l’augmentation des volumes et à la complexité des données sur lesquelles se base l’activité d’une société, les entreprises recherchent des méthodes pour gérer leur infrastructure TIC. <br><br> Nécessitant d’être à la fois flexibles et évolutives, ces solutions ne doivent pas pour autant compromettre la sécurité et la fiabilité des données. Pour répondre à cette demande, de plus en plus d’entreprises se tournent vers une externalisation du stockage de données grâce aux prestataires extérieurs fournisseurs de data center.</p>

                    </div>

                    <div style=" color: black; margin-top: 5%; margin-left: 5%" class=" lead row">
                        <div class="col-sm-6">               
                            <ul class="nostyle">
                                <li><i class="fa fa-check-square"></i> Serveur performant</li>
                                <li><i class="fa fa-check-square"></i> Utilisation sur mesure</li>
                            </ul>
                        </div>

                        <div class="col-sm-6">
                            <ul class="nostyle">
                                <li><i class="fa fa-check-square"></i> Gain de place</li>
                                <li><i class="fa fa-check-square"></i> Sécurité maximale</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <br>
                <br>

            </div>

        </section>

        <section id="cta2" >
            <div class="container">

                <div class="section-header">
                    <h2 class="section-title text-center wow fadeInDown">Our Services</h2>
                    <p class="text-center wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
                </div>

                <div class="row">
                    <div class="features">
                        <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
                            <div class="media service-box">
                                <div class="pull-left">
                                    <i class="fa fa-line-chart"></i>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">UX design</h4>
                                    <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                                </div>
                            </div>
                        </div><!--/.col-md-4-->

                        <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms">
                            <div class="media service-box">
                                <div class="pull-left">
                                    <i class="fa fa-cubes"></i>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">UI design</h4>
                                    <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                                </div>
                            </div>
                        </div><!--/.col-md-4-->

                        <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="200ms">
                            <div class="media service-box">
                                <div class="pull-left">
                                    <i class="fa fa-pie-chart"></i>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">SEO Services</h4>
                                    <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                                </div>
                            </div>
                        </div><!--/.col-md-4-->

                        <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="300ms">
                            <div class="media service-box">
                                <div class="pull-left">
                                    <i class="fa fa-bar-chart"></i>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">iOS App</h4>
                                    <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                                </div>
                            </div>
                        </div><!--/.col-md-4-->

                        <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="400ms">
                            <div class="media service-box">
                                <div class="pull-left">
                                    <i class="fa fa-language"></i>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Android App</h4>
                                    <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                                </div>
                            </div>
                        </div><!--/.col-md-4-->

                        <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="500ms">
                            <div class="media service-box">
                                <div class="pull-left">
                                    <i class="fa fa-bullseye"></i>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Win App</h4>
                                    <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                                </div>
                            </div>
                        </div><!--/.col-md-4-->
                    </div>
                </div><!--/.row-->    
            </div><!--/.container-->
        </section><!--/#services-->





        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>




        @if (Auth::guest())


        <section  style=" padding: 10% 0% 5% 0%;  background-image:url(images/cta2/web2.jpeg);    background-size: 100% 100%;    background-repeat: no-repeat;"  id="simuateur" class="wow fadeIn">


            <div class="container">

                <div class="section-header">
                    <h2 class="section-title text-center wow fadeInDown">Simulateur</h2>
                    <p class="text-center wow fadeInDown">Afin d'avoir une idée a propos de nos services cloud ansi les tarifications relatifes, vous pouvez simuler une préfacturation concernant vos besoins en terme de recources</p>
                </div>

                <div  class="row">

                    <div class="col-sm-6 " >

                        <h3> <img  src="images/simulateur/desktop.png" idth="30" height="23" /> &nbsp; first data</h3>


                        <div class="page-header">

                            <input  id="range" type="range" name="rangeInput" max="300" value="0" oninput="updateTextInput();"  >
                        </div>
                    </div>  

                    <div class="col-sm-6" > 


                        <h3><img src="images/simulateur/letter.png" width="30" height="23" /> &nbsp; second data</h3>

                        <div class="page-header">

                            <input id="range2" type="range" name="rangeInput" max="50" value="0" oninput="updateTextInput();"   >  
                        </div>
                    </div>


                    <br >

                    <div class="col-sm-6" > 
                        <h3>
                            <img src="images/simulateur/ram-memory.png" width="30" height="23" />
                            thierd data
                        </h3>

                        <div class="page-header">
                            <input id="range3" type="range" name="rangeInput" max="50" value="0" oninput="updateTextInput();"   > 
                        </div>
                    </div>


                    <div class="col-sm-6" > 
                        <h3>
                            <img src="images/simulateur/padlock.png" width="30" height="23" /> &nbsp; second data
                        </h3>

                        <div class="page-header">

                            <input id="range2" type="range" name="rangeInput" max="50" value="0" oninput="updateTextInput();"   >  
                        </div>
                    </div>

                    <br>

                    <div class="col-sm-6" > 

                        <h3>
                            <img src="images/simulateur/server.png" width="30" height="23" /> 
                            &nbsp; second data
                        </h3>

                        <div class="page-header">
                            <input id="range2" type="range" name="rangeInput" max="50" value="0" oninput="updateTextInput();"   >  
                        </div>

                    </div>


                    <div class="col-sm-6" > 

                        <div data-role="fieldcontain">     
                            <h3>
                                <img src="images/simulateur/database.png" width="30" height="23" />
                                &nbsp;  second data
                            </h3>

                            <div class="page-header">
                                <input id="range2" type="range" name="rangeInput" max="300" value="0" oninput="updateTextInput();">  
                            </div>

                        </div>
                    </div>    
                </div>



                <h4 style=" padding-bottom:5%; text-align: center; margin:0; margin-top:5%; ">
                    <p  style="padding-bottom:2%; padding-top:2%" class="bg-success" >
                        <span  id="value1"> 

                            Prix total généré par rapport a vos besoins:

                            <br>
                            <br>

                            <span style="margin-top: 5%; font-size: 30px "> 
                                0 Da  
                            </span>


                        </span> 
                    </p>
                </h4>

            </div>



            @endif


            <script>


    function updateTextInput() {

        var value1 = Number(document.getElementById("range").value);
        var value2 = Number(document.getElementById("range2").value);
        var value3 = Number(document.getElementById("range3").value);
        var total = value1 + value2 + (value3 * 10);
        document.getElementById('value1').innerHTML = "Prix total généré par rapport a vos besoins :  " + "<h2>" + total + " Da </h2>" + " ";

    }

            </script>

        </section>




        <section style="padding: 5% 0% 5% 0%; background-image: url(images/testimonial/team.jpeg);    background-size: 100% 100%;    background-repeat: no-repeat; " id="team">
            <div class="container">


                <div class="section-header">
                    <h2 class="section-title text-center wow fadeInDown">Equipe</h2>
                </div>

                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">

                        <div id="carousel-testimonial" class="carousel slide text-center" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <p style="color: white" ><img class="img-circle img-thumbnail" src="images/testimonial/01.jpg" alt=""></p>
                                    <h3>Bouzeghoub Redouan</h3>
                                    <p style="color: white" >Direction du Système d'Information</p>
                                    <p style="color: white">ANIMATEUR RESEAU SERVICE TECHNIQUE </p>
                                </div>
                                <div class="item">
                                    <p style="color: white" ><img class="img-circle img-thumbnail" src="images/testimonial/01.jpg" alt=""></p>
                                    <h3>REBIA ADLENE</h3>
                                    <p style="color: white" >Direction du Système d'Information</p>
                                    <p style="color: white">ANIMATEUR RESEAU SERVICE TECHNIQUE </p>
                                </div>
                                <div class="item">
                                    <p style="color: white" ><img class="img-circle img-thumbnail" src="images/testimonial/01.jpg" alt=""></p>
                                    <h3>Sadiki Ayoub</h3>
                                    <p style="color: white" >Direction du Système d'Information</p>
                                    <p style="color: white">Ingenieur develoepeur WEB </p>
                                </div>
                                <div class="item">
                                    <p style="color: white" ><img class="img-circle img-thumbnail" src="images/testimonial/01.jpg" alt=""></p>
                                    <h3>Khebbab Hakim</h3>
                                    <p style="color: white" >Direction du Système d'Information</p>
                                    <p style="color: white">ANIMATEUR RESEAU SERVICE TECHNIQUE </p>
                                </div>
                                <div class="item">
                                    <p style="color: white" ><img class="img-circle img-thumbnail" src="images/testimonial/01.jpg" alt=""></p>
                                    <h3>Honida Sali</h3>
                                    <p style="color: white" >Direction du Système d'Information</p>
                                    <p style="color: white">Ingenieur developeur Web</p>
                                </div>
                            </div>

                            <!-- Controls -->
                            <div class="btns">
                                <a class="btn btn-primary btn-sm" href="#carousel-testimonial" role="button" data-slide="prev">
                                    <span class="fa fa-angle-left" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="btn btn-primary btn-sm" href="#carousel-testimonial" role="button" data-slide="next">
                                    <span class="fa fa-angle-right" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--/#testimonial-->





        <footer id="footer">
            <div class="container">
                <div class="row">
                    
                    <div class= "col-sm-5">
                        &copy; 2017 ATM Mobilis. 
                    </div>
                    
                    <div   style="display: block; margin-left: 4%;" class= "col-sm-2" >
                            <img style="" src="images/cta2/mobile-phone-tablet-and-laptop-screen.png" > 
                    </div>
                    
                    
                    <div style=" margin-left: 4%;" class="col-sm-4">
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

        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/js.php"></script>
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