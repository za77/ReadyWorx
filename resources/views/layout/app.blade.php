<!doctype html>
 <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Remove Tap Highlight on Windows Phone IE -->
    <meta name="msapplication-tap-highlight" content="no"/>

    <link rel="icon" type="image/png" href="{{asset('public/assets/img/favicon-16x16.png')}}" sizes="16x16">
    <link rel="icon" type="image/png" href="{{asset('public/assets/img/favicon-32x32.png')}}" sizes="32x32">

    <title>Altair Admin v2.2.0</title>

    <!-- additional styles for plugins -->
        <!-- weather icons -->
        <script src="http://maps.google.com/maps/api/js?key=AIzaSyDUJukb4ORjrFGkR2oMAKi_GLAB98VoxX4&">
            </script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
        <link rel="stylesheet" 
        href="{{asset('public/bower_components/weather-icons/css/weather-icons.min.css')}}" media="all">
        <!-- metrics graphics (charts) -->
        <link rel="stylesheet" href="{{asset('public/bower_components/metrics-graphics/dist/metricsgraphics.css')}}">
        <!-- chartist -->
        <link rel="stylesheet" href="{{asset('public/bower_components/chartist/dist/chartist.min.css')}}">
    
    <!-- uikit -->
    <link rel="stylesheet" href="{{asset('public/bower_components/uikit/css/uikit.almost-flat.min.css')}}" media="all">

    <!-- flag icons -->
    <link rel="stylesheet" href="{{asset('public/assets/icons/flags/flags.min.css')}}" media="all">

    <!-- altair admin -->
    <link rel="stylesheet" href="{{asset('public/assets/css/main.min.css')}}" media="all">

     <link rel="stylesheet" href="{{ asset('public/assets/css/themes/themes_combined.min.css') }}" media="all">
    
    
  <link rel="Stylesheet" type="text/css" href="{{ asset('public/js/croppie.css')}}" />
  
</head>
<body class=" sidebar_main_open sidebar_main_swipe">
    <!-- main header -->
   @include('layout.header')
    <!-- main sidebar -->
    @include('layout.side')
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
        <script src="{{asset('public/bower_components/d3/d3.min.js')}}"></script>
        <!-- metrics graphics (charts) -->
        <script src="{{asset('public/bower_components/metrics-graphics/dist/metricsgraphics.min.js')}}"></script>
        <!-- chartist (charts) -->
        
        <!-- maplace (google maps) -->
        <!-- <script src="http://maps.google.com/maps/api/js?key=AIzaSyDUJukb4ORjrFGkR2oMAKi_GLAB98VoxX4"></script> -->
        

    <!-- AIzaSyDUJukb4ORjrFGkR2oMAKi_GLAB98VoxX4 -->


        <script src="{{asset('public/bower_components/maplace-js/dist/maplace.min.js')}}"></script>
        <!-- peity (small charts) -->
        <script src="{{asset('public/bower_components/peity/jquery.peity.min.js')}}"></script>
        <!-- easy-pie-chart (circular statistics) -->
        <script src="{{asset('public/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js')}}"></script>
        <!-- countUp -->
        <script src="{{asset('public/bower_components/countUp.js')}}"></script>
        <!-- handlebars.js')}} -->
        <script src="{{asset('public/bower_components/handlebars/handlebars.min.js')}}"></script>
        <script src="{{asset('public/assets/js/custom/handlebars_helpers.min.js')}}"></script>
        <!-- CLNDR -->
        <script src="{{asset('public/bower_components/clndr/src/clndr.js')}}"></script>
        <!-- fitvids -->
        <script src="{{asset('public/bower_components/fitvids/jquery.fitvids.js')}}"></script>

        <!--  dashbord functions -->
        
        <script src="{{asset('public/bower_components/tinymce/tinymce.js') }}"></script>

    <!--  wysiwyg editors functions -->
    <script src="{{asset('public/assets/js/pages/forms_wysiwyg.js')}}"></script>
    <script src="{{asset('public/assets/js/pages/page_contact_list.min.js') }}"></script>
    <script src="{{asset('public/bower_components/ion.rangeslider/js/ion.rangeSlider.min.js')}}"></script>
    <!-- htmleditor (codeMirror) -->
    <script src="{{asset('public/assets/js/uikit_htmleditor_custom.min.js')}}"></script>
    <!-- inputmask-->
    <script src="{{asset('public/bower_components/jquery.inputmask/dist/jquery.inputmask.bundle.js')}}"></script>

    
    <script src="{{asset('public/assets/js/pages/forms_advanced.min.js')}}"></script>
    <script src="{{asset('public/js/Common.js')}}"></script>
    <script src="{{ asset('public/js/croppie.js')}}"></script>

    
  


   
</body>
</html>