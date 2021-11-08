<html>
    <head>
        <meta charset="utf-8">
        <title>Msoft Solution - @yield('title')</title>
        <!-- reey font -->
        <link rel="stylesheet" href="css/reey-font.css">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/fontawesome-all.css" rel="stylesheet">
        <link href="css/owl.css" rel="stylesheet">
        <link href="css/flaticon.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet">
        <link href="css/jquery-ui.css" rel="stylesheet">
        <link href="css/jquery.fancybox.min.css" rel="stylesheet">
        <link href="css/hover.css" rel="stylesheet">
        <link rel="stylesheet" href="css/jarallax.css">
        <link rel="stylesheet" href="css/swiper.min.css">
        <link href="css/custom-animate.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <!-- rtl css -->
        <link href="css/rtl.css" rel="stylesheet">
        <!-- Responsive File -->
        <link href="css/responsive.css" rel="stylesheet">

        <!-- variable update -->
        <link rel="stylesheet" href="css/variables/index-7.css">

        <!-- Color css -->
        <link rel="stylesheet" id="jssDefault" href="css/colors/color-11.css">

        <link rel="shortcut icon" href="images/favicon.png" id="fav-shortcut" type="image/x-icon">
        <link rel="icon" href="images/favicon.png" id="fav-icon" type="image/x-icon">

        <!-- Responsive Settings -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    </head>
    <body>
        <div class="page-wrapper">

            <!-- Preloader -->
            <div class="preloader">
                <div class="icon" style="background-image: url(images/update-01-10-2021/preloader-7.png);"></div>
            </div>

            <!--Mobile Menu-->
            @include('sections.MobileNavbar')

            <!--Desktop Menu-->
            @include('sections.DesktopNavbar')

            <!--Container-->
            <div>
                @yield('content')
            </div>
        </div>

        <script src="js/jquery.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/TweenMax.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script src="js/jquery.fancybox.js"></script>
        <script src="js/owl.js"></script>
        <script src="js/mixitup.js"></script>
        <script src="js/appear.js"></script>
        <script src="js/wow.js"></script>

        <script src="js/jquery.easing.min.js"></script>
        <script src="js/jarallax.min.js"></script>
        <script src="js/swiper.min.js"></script>
        <script src="js/custom-script.js"></script>
    </body>
</html>