<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Remove Tap Highlight on Windows Phone IE -->
    <meta name="msapplication-tap-highlight" content="no"/>

    <link rel="icon" type="image/png" href="{{asset('public/assets/img/favicon-16x16.png')}}" sizes="16x16">
    <link rel="icon" type="image/png" href="{{asset('public/assets/img/favicon-32x32.png')}}" sizes="32x32">

    <title>@yield('title')</title>

        <link rel="stylesheet" 
        href="{{asset('public/bower_components/weather-icons/css/weather-icons.min.css')}}" media="all">
        <!-- metrics graphics (charts) -->
        <link rel="stylesheet" href="{{asset('public/bower_components/metrics-graphics/dist/metricsgraphics.css')}}">
        <!-- chartist -->
        
    
    <!-- uikit -->
    <link rel="stylesheet" href="{{asset('public/bower_components/uikit/css/uikit.almost-flat.min.css')}}" media="all">

    <!-- flag icons -->
    <link rel="stylesheet" href="{{asset('public/assets/icons/flags/flags.min.css')}}" media="all">

    <!-- altair admin -->
    <link rel="stylesheet" href="{{asset('public/assets/css/main.min.css')}}" media="all">

    


    

</head>
<body class=" sidebar_main_open sidebar_main_swipe">
    <!-- main header -->
   include(layout.header)
    <!-- main sidebar -->
    include(layout.side)
    <!-- main sidebar end -->

    <div id="page_content">
        @yield('content')
    </div>

    <!-- google web fonts -->
    <script>
        WebFontConfig = {
            google: {
                families: [
                    'Source+Code+Pro:400,700:latin',
                    'Roboto:400,300,500,700,400italic:latin'
                ]
            }
        };
        (function() {
            var wf = document.createElement('script');
            wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
            '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
            wf.type = 'text/javascript';
            wf.async = 'true';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(wf, s);
        })();
    </script>

    <!-- common functions -->
    <script src="{{asset('public/assets/js/common.min.js')}}"></script>
    <!-- uikit functions -->
    <script src="{{asset('public/assets/js/uikit_custom.min.js')}}"></script>
    <!-- altair common functions/helpers -->
    <script src="{{asset('public/assets/js/altair_admin_common.min.js')}}"></script>

    <!-- page specific plugins -->
        <!-- d3 -->
     
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="{{asset('public/bower_components/maplace-js/dist/maplace.min.js')}}"></script>
        <!-- peity (small charts) -->
       
       
        <!-- countUp -->
       
        

        <!--  dashbord functions -->
        <script src="{{asset('public/assets/js/pages/dashboard.min.js')}}"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <script>
        $(function() {
            // enable hires images
            altair_helpers.retina_images();
            // fastClick (touch devices)
            if(Modernizr.touch) {
                FastClick.attach(document.body);
            }
        });
    </script>


        
</body>
</html>