<!DOCTYPE HTML>
<html>

<head>
    <title>Traveler - Index</title>
    <base href="{{asset('')}}">

    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta name="keywords" content="Template, html, premium, themeforest" />
    <meta name="description" content="Traveler - Premium template for travel companies">
    <meta name="author" content="Tsoy">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- GOOGLE FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600' rel='stylesheet' type='text/css'>
    <!-- /GOOGLE FONTS -->
    <link rel="stylesheet" href="public/soure/css/bootstrap.css">
    <link rel="stylesheet" href="public/soure/css/font-awesome.css">
    <link rel="stylesheet" href="public/soure/css/icomoon.css">
    <link rel="stylesheet" href="public/soure/css/styles.css">
    <link rel="stylesheet" href="public/soure/css/mystyles.css">
    <link rel="stylesheet" href="public/soure/css/custom.css">
    <script src="public/soure/js/modernizr.js"></script>

   
</head>

<body>

    <!-- FACEBOOK WIDGET -->
    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <!-- /FACEBOOK WIDGET -->
    <div class="global-wrap">
        <!-- footer -->   
        @include('header')

        <!-- end footer -->   
        <!-- TOP AREA -->
        
        @yield('content')
        

        <!-- END TOP AREA  -->

        <!-- footer -->
        @include('footer')
        
        <!-- end footer -->


        

        <script src="public/soure/js/jquery.js"></script>
        <script src="public/soure/js/bootstrap.js"></script>
        <script src="public/soure/js/slimmenu.js"></script>
        <script src="public/soure/js/bootstrap-datepicker.js"></script>
        <script src="public/soure/js/bootstrap-timepicker.js"></script>
        <script src="public/soure/js/nicescroll.js"></script>
        <script src="public/soure/js/dropit.js"></script>
        <script src="public/soure/js/ionrangeslider.js"></script>
        <script src="public/soure/js/icheck.js"></script>
        <script src="public/soure/js/fotorama.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
        <script src="public/soure/js/typeahead.js"></script>
        <script src="public/soure/js/card-payment.js"></script>
        <script src="public/soure/js/magnific.js"></script>
        <script src="public/soure/js/owl-carousel.js"></script>
        <script src="public/soure/js/fitvids.js"></script>
        <script src="public/soure/js/tweet.js"></script>
        <script src="public/soure/js/countdown.js"></script>
        <script src="public/soure/js/gridrotator.js"></script>
        <script src="public/soure/js/custom.js"></script>
    </div>
</body>

</html>



