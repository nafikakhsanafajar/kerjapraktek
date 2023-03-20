<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.2
Version: 3.7.0
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>PTPN IX | Kerja Praktek</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="{{url('assets/exa_assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{url('assets/exa_assets/css/font-awesome.min.css')}}" rel="stylesheet" />
    <link href="{{url('assets/exa_assets/css/flaticon-set.css')}}" rel="stylesheet" />
    <link href="{{url('assets/exa_assets/css/magnific-popup.css')}}" rel="stylesheet" />
    <link href="{{url('assets/exa_assets/css/owl.carousel.min.css')}}" rel="stylesheet" />
    <link href="{{url('assets/exa_assets/css/owl.theme.default.min.css')}}" rel="stylesheet" />
    <link href="{{url('assets/exa_assets/css/animate.css')}}" rel="stylesheet" />
    <link href="{{url('assets/exa_assets/css/bootsnav.css')}}" rel="stylesheet" />
    <link href="{{url('assets/exa_assets/style.css')}}" rel="stylesheet">
    <link href="{{url('assets/exa_assets/css/responsive.css')}}" rel="stylesheet" />
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" rel="stylesheet" /> -->

    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800" rel="stylesheet">

<!-- END THEME STYLES -->
<link rel="shortcut icon" href="{{url('assets/images/favicon.ico')}}">
</head>

<body>
<div class="se-pre-con"></div>
        <!-- Preloader Ends -->

        <!-- Start Header Top 
        <!============================================= -->
            @include('layouts.include.topbar')
        <!-- End Header Top -->
        <!-- Header
        ============================================= -->
        <header id="home">

            <!-- Start Navigation -->
            @include('layouts.include.navbar')
            <!-- End Navigation -->
        </header>
    
        <div class="wrapper">
            @yield('content')
        </div>

    @include('layouts.include.navbar')
    <!-- End Footer -->
    @include('layouts.include.footer')
    <!-- jQuery Frameworks
    ============================================= -->
    <script src="{{url('assets/exa_assets/js/jquery-1.12.4.min.js')}}"></script>
    <script src="{{url('assets/exa_assets/js/bootstrap.min.js')}}"></script>
    <script src="{{url('assets/exa_assets/js/equal-height.min.js')}}"></script>
    <script src="{{url('assets/exa_assets/js/jquery.appear.js')}}"></script>
    <script src="{{url('assets/exa_assets/js/jquery.easing.min.js')}}"></script>
    <script src="{{url('assets/exa_assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{url('assets/exa_assets/js/modernizr.custom.13711.js')}}"></script>
    <script src="{{url('assets/exa_assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{url('assets/exa_assets/js/wow.min.js')}}"></script>
    <script src="{{url('assets/exa_assets/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{url('assets/exa_assets/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{url('assets/exa_assets/js/count-to.js')}}"></script>
    <script src="{{url('assets/exa_assets/js/bootsnav.js')}}"></script>
    <script src="{{url('assets/exa_assets/js/main.js')}}"></script>

</body>
<!-- END BODY -->
</html>