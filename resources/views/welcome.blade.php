<!doctype html>
<!--[if IE]><![endif]-->
<!--[if lt IE 7 ]> <html lang="en" class="ie6">    <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7">    <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8">    <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9">    <![endif]-->
<!--[if IE 10 ]>    <html lang="en" class="ie10">    <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Grant || Dashboard</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicon
		============================================ -->
		<link rel="shortcut icon" type="image/x-icon" href="/assets/img/favicon.ico"> 
		
        <!-- master CSS
        ============================================ -->            
        <link rel="stylesheet" href="/assets/master.css">

        <!-- Color Css Files Start -->
        <link rel="alternate stylesheet" type="text/css" href="/assets/switcher/color-one.css" title="color-one" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="/assets/switcher/color-two.css" title="color-two" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="/assets/switcher/color-three.css" title="color-three" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="/assets/switcher/color-four.css" title="color-four" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="/assets/switcher/color-five.css" title="color-five" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="/assets/switcher/color-six.css" title="color-six" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="/assets/switcher/color-seven.css" title="color-seven" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="/assets/switcher/color-eight.css" title="color-eight" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="/assets/switcher/color-nine.css" title="color-nine" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="/assets/switcher/color-ten.css" title="color-ten" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="/assets/switcher/color-eleven.css" title="color-eleven" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="/assets/switcher/color-twelv.css" title="color-twelve" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="/assets/switcher/pattren1.css" title="pattren1" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="/assets/switcher/pattren2.css" title="pattren2" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="/assets/switcher/pattren3.css" title="pattren3" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="/assets/switcher/pattren4.css" title="pattren4" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="/assets/switcher/pattren5.css" title="pattren5" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="/assets/switcher/background1.css" title="background1" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="/assets/switcher/background2.css" title="background2" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="/assets/switcher/background3.css" title="background3" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="/assets/switcher/background4.css" title="background4" media="screen" />
        <link rel="alternate stylesheet" type="text/css" href="/assets/switcher/background5.css" title="background5" media="screen" />
        <!-- Color Css Files End -->

    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		
		<!-- Start main area -->
        @yield('header');
        		<!-- End main menu area -->
                <!-- Start mobile menu -->
                <div class="mobile-menu-area">
                    <div class="container">
                        <div class="row">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="nav">
                                    <li><a href="{{route('anasayfa')}}">Anasayfa</a></li>
                                    <li><a href="{{route('hakkimizda')}}">Hakkımızda</a></li>
                                    <li><a href="{{route('blogindex')}}">Blog</a></li>

                                        <li><a href="#">Kategoriler</a>
                                            <ul>
                                                <li><a href="{{route('ihtiyaclarindex')}}">İhtiyaçlar</a></li>
                                                <li><a href="{{route('dersindex')}}">Dersler</a></li>
                                          
                                            </ul>
                                        </li>
                                        <li><a href="{{route('iletisim')}}">İletişim</a></li> 

                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End mobile menu -->
        	</header>
            @if(session('success'))
            <div class="alert alert-success">
            {{session('success')}}
            </div>
            @endif
        	<!-- End header -->
              @yield('content');
                <!-- End brand logo area -->
            <!-- Start footer -->
           @yield('footer');
            <!-- End footer -->
        </div>
        <!-- End main area -->

    
        
        <!-- modernizr-3.10.0.min js
		============================================ -->  
        <script src="/assets/js/vendor/modernizr-3.10.0.min.js"></script>

		<!-- jquery-3.5.0.min js
		============================================ -->  
        <script src="/assets/js/vendor/jquery-3.5.0.min.js"></script>
        
        <!-- jquery-migrate-3.1.0.min js
		============================================ -->  
        <script src="/assets/js/vendor/jquery-migrate-3.1.0.min.js"></script>
		
		<!-- bootstrap js
		============================================ -->         
        <script src="/assets/js/bootstrap.bundle.min.js"></script>
		
		<!-- owl.carousel.min js
		============================================ -->       
        <script src="/assets/js/owl.carousel.min.js"></script>

        <!-- jquery.nivo.slider.pack js
		============================================ -->       
        <script src="/assets/js/jquery.nivo.slider.pack.js"></script>

        <!-- jquery.mixitup.min js
        ============================================ -->       
        <script src="/assets/js/jquery.mixitup.min.js"></script>

        <!-- jquery.magnific-popup.min js
        ============================================ -->       
        <script src="/assets/js/jquery.magnific-popup.min.js"></script>

        <!-- jquery.meanmenu js
        ============================================ -->       
        <script src="/assets/js/jquery.meanmenu.js"></script>

        <!-- jquery.syotimer.min js
        ============================================ -->       
        <script src="/assets/js/jquery.syotimer.min.js"></script>
	
		<!-- wow js
		============================================ -->       
        <script src="/assets/js/wow.js"></script>
		
        <!-- jquery.scrollUp.min js
        ============================================ -->       
        <script src="/assets/js/jquery.scrollUp.min.js"></script>
        
        <!-- jquery.ajaxchimp.min js
        ============================================ -->       
        <script src="/assets/js/jquery.ajaxchimp.min.js"></script>
      
        <!-- plugins js
		============================================ -->         
        <script src="/assets/js/plugins.js"></script>

        <script>
        	new WOW().init();
        </script>

        <!-- styleswitch js
        ============================================ -->       
        <script src="/assets/js/styleswitch.js  "></script>

   		<!-- main js
		============================================ -->           
        <script src="/assets/js/main.js"></script>
    </body>
</html>
