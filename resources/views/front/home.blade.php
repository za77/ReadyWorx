<!doctype html>
<!--[if lte IE 9]> <html class="lte-ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Remove Tap Highlight on Windows Phone IE -->
    <meta name="msapplication-tap-highlight" content="no"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>

body, html,.login_page {
    max-height: 100% !important;
    margin: 0 !important;
    padding:  0 !important;
    position: relative !important;
   background-color: #000 !important;
  opacity: 1 !important;
  max-width: 100% !important;
    overflow-y: hidden !important;
  
}

.bg {
    
    height: 100% !important;
    background-position: center !important;
    background-repeat: no-repeat !important;
    background-size: cover !important;
    opacity: 0.4 !important;
    
}

.login_page_wrapper
{
    position: absolute !important;
    top: 20% !important;
    right: 40% !important;
}
.bar
{
    position: absolute !important;
    top: 3% !important;
    right: 2% !important;
    padding: 250px 120px   0px 12px 0px !important;
}
.center
{
    position: absolute !important;
    bottom: 20% !important;
    right: 40% !important;
    padding: 250px 120px   0px 12px 0px !important;
}
img
{
       height: 50% !important;
        background-position: center !important;
    background-repeat: no-repeat !important;
    background-size: cover !important;

    /* Center and scale the image nicely */
    background-position: center !important;
    background-repeat: no-repeat !important;
    background-size: cover !important;
    opacity: 0.4 !important; 
}
.row{
    margin-right: 0px !important; 
    margin-left: 0px !important;
}
</style>


    <link rel="icon" type="image/png" href="{{url('public/assets/img/favicon-16x16.png')}}" sizes="16x16">
    <link rel="icon" type="image/png" href="{{url('public/assets/img/favicon-32x32.png')}}" sizes="32x32">

    <title>Altair Admin v2.11.0 - Login Page</title>

    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500' rel='stylesheet' type='text/css'>

    <!-- uikit -->
    <link rel="stylesheet" href="{{url('public/bower_components/uikit/css/uikit.almost-flat.min.css')}}"/>

    <!-- altair admin login page -->
    <link rel="stylesheet" href="{{url('public/assets/css/login_page.min.css')}}" />

</head>
<body class="login_page">
<div class="bg">
    <div class="row">
  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="{{ url('public/bg1.jpg') }}" alt="Los Angeles" style="width:100%;">
        <div class="center"><button type="">hai</button></div>
      </div>

      <div class="item">
        <img src="{{ url('public/bg2.jpg') }}" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="{{ url('public/bg3.jpg') }}" alt="New york" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</div>
<nav class="navbar navbar bar">
  
   
    <ul class="nav navbar-nav">
      <li><a href="#">Home</a></li>
      <li><a href="#">Register</a></li>
      <li><a href="#">Login</a></li>
      
    </ul>
  
</nav>
    

    <!-- common functions -->
    <script src="{{url('public/assets/js/common.min.js')}}"></script>
    <!-- uikit functions -->
    <script src="{{url('public/assets/js/uikit_custom.min.js')}}"></script>
    <!-- altair core functions -->
    <script src="{{url('public/assets/js/altair_admin_common.min.js')}}"></script>

    <!-- altair login page functions -->
    <script src="{{url('public/assets/js/pages/login.min.js')}}"></script>

  

</body>
</html>