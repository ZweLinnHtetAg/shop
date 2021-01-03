<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Aviato E-Commerce Template">
  
  <meta name="author" content="Themefisher.com">

  <title>Aviato | E-commerce template</title>

  <!-- Mobile Specific Meta-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/images/favicon.png') }}" />
  
  <!-- Themefisher Icon font -->
  <link rel="stylesheet" href="{{asset('frontend/plugins/themefisher-font/style.css')}}">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="{{asset('frontend/plugins/bootstrap/css/bootstrap.min.css')}}">
  
  <!-- Revolution Slider -->
  <link rel="stylesheet" type="text/css" href="{{asset('frontend/plugins/revolution-slider/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('frontend/plugins/revolution-slider/revolution/fonts/font-awesome/css/font-awesome.css')}}">

  <!-- REVOLUTION STYLE SHEETS -->
  <link rel="stylesheet" type="text/css" href="{{asset('frontend/plugins/revolution-slider/revolution/css/settings.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('frontend/plugins/revolution-slider/revolution/css/layers.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('frontend/plugins/revolution-slider/revolution/css/navigation.css')}}">
  
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">

</head>

<body id="body">

  @yield('main-content')

  <!-- 
    Essential Scripts
    =====================================-->
    
    <!-- Main jQuery -->
    <script src="{{ asset('frontend/plugins/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap 3.1 -->
    <script src="{{ asset('frontend/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- Bootstrap Touchpin -->
    <script src="{{ asset('frontend/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js')}}"></script>
    <!-- Instagram Feed Js -->
    <script src="{{ asset('frontend/plugins/instafeed-js/instafeed.min.js')}}"></script>
    <!-- Video Lightbox Plugin -->
    <script src="{{ asset('frontend/plugins/ekko-lightbox/dist/ekko-lightbox.min.js')}}"></script>
    <!-- Count Down Js -->
    <script src="{{ asset('frontend/plugins/SyoTimer/build/jquery.syotimer.min.js')}}"></script>
    
    <!-- Revolution Slider -->
    <script type="text/javascript" src="{{ asset('frontend/plugins/revolution-slider/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('frontend/plugins/revolution-slider/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
    
    <!-- Revolution Slider -->
    <script type="text/javascript" src="{{ asset('frontend/plugins/revolution-slider/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('frontend/plugins/revolution-slider/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('frontend/plugins/revolution-slider/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('frontend/plugins/revolution-slider/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('frontend/plugins/revolution-slider/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('frontend/plugins/revolution-slider/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('frontend/plugins/revolution-slider/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('frontend/plugins/revolution-slider/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('frontend/plugins/revolution-slider/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('frontend/plugins/revolution-slider/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('frontend/plugins/revolution-slider/assets/warning.js')}}"></script>  



    <!-- Google Mapl -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
  <script type="text/javascript" src="{{ asset('frontend/plugins/google-map/gmap.js')}}"></script>

    <!-- Main Js File -->
    <script src="{{ asset('frontend/js/script.js')}}"></script>
    


  </body>
  </html>
