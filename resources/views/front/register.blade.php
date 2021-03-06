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
<style>
body, html {
    height: 100% !important;
    margin: 0 !important;
    padding:  0 !important;
    position: relative !important;
   background-color: #000 !important;
  opacity: 1 !important;
  
}

.bg {
    /* The image used */
    background-image: url("public/bg2.jpg")!important;
    
    /* Full height */
    height: 100% !important;

    /* Center and scale the image nicely */
    background-position: center !important;
    background-repeat: no-repeat !important;
    background-size: cover !important;
    opacity: 0.4 !important;
    
}
.card1
{
    position: absolute !important;
    top: 20% !important;
    right: 35% !important;

    background: white;
    width: 700px;   
    height: 600px;
    border-radius: 5px;

}
form
{
    margin-top: 50px;
}
.form-control
{
    margin : 0px 0px 0px 15px;
}

@media only screen and (max-width: 1130px) {

.card1
{
    position: absolute !important;
    top: 10% !important;
    left: 25% !important;
    background: white;
    width: 500px;   
    height: 650px;
    border-radius: 5px;
}
form
{
    margin-top: 50px;
}

}
@media only screen and (max-width: 860px) {

.card1
{
    position: absolute !important;
    top: 10% !important;
    left: 20% !important;
    background: white;
    width: 450px;   
    height: 850px;
    border-radius: 5px;
}
form
{
    margin-top: 50px;
}

}
@media only screen and (max-width: 616px) {

.card1
{
    position: absolute !important;
    top: 10% !important;
    left: 17% !important;
    background: white;
    width: 450px;   
    height: 850px;
    border-radius: 5px;
}
form
{
    margin-top: 50px;
}

}
@media only screen and (max-width: 494px) {

.card1
{
    position: absolute !important;
    top: 10% !important;
    left: 50px !important;
    background: white;
    width: 350px;   
    height: 890px;
    border-radius: 5px;
     
}
.form-control
{
    margin-left: 2px;
    margin-right: 2px;

}
form
{
    margin-top: 50px;
}

}

@media only screen and (max-width: 412px) {

.card1
{
    position: absolute !important;
    top: 10% !important;
    left: 30px !important;
    background: white;
    width: 350px;   
    height: 890px;
    border-radius: 5px;
}
form
{
    margin-top: 50px;
}

}
@media only screen and (max-width: 384px) {

.card1
{
    position: absolute !important;
    top: 0% !important;
    left: 0px !important;
    background: white;
    width: 100%;   
    height: 890px;
    border-radius: 5px;
}
form
{
    margin-top: 50px;
}

}



</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="icon" type="image/png" href="{{url('public/assets/img/favicon-16x16.png')}}" sizes="16x16">
    <link rel="icon" type="image/png" href="{{url('public/assets/img/favicon-32x32.png')}}" sizes="32x32">

    <title>Altair Admin v2.11.0 - Login Page</title>

    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500' rel='stylesheet' type='text/css'>

    <!-- uikit -->
    <link rel="stylesheet" href="{{url('public/bower_components/uikit/css/uikit.almost-flat.min.css')}}"/>

    <!-- altair admin login page -->
    <link rel="stylesheet" href="{{url('public/assets/css/login_page.min.css')}}" />

</head>
<body>
<div class="bg"></div>

  <div class="card1">
    <form class="form-horizontal" method="post" action="{{ url('/register') }}" >
    {{ csrf_field() }}
    <div class="form-group">
    <label class="control-label col-sm-3 col-sm-offset-2 col-xs-10 uk-margin-left" for="role">Register Type</label>
    <div class="col-sm-8 col-xs-10">
      <select  class="form-control" id="role" name="role" placeholder="Enter email">
        <option value="0">--- SELECT TYPE ---</option>
        <option value="4">Customer</option>
        <option value="2">Mall</option>
        <option value="3">Branch</option>           
    </select>
    </div>
  </div>

    <div class="form-group">
    <label class="control-label col-sm-3 col-sm-offset-2 col-xs-10 uk-margin-left" for="firstName">First Name</label>
    <div class="col-sm-8  col-xs-10">
      <input type="text" class="form-control" name="firstName" id="firstName" placeholder="Enter First Name">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-3 col-sm-offset-2 col-xs-10 uk-margin-left" for="lastName">Last Name</label>
    <div class="col-sm-8 col-xs-10">
      <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Enter Last Name">
    </div>
  </div>
<div class="form-group">
    <label class="control-label col-sm-3 col-sm-offset-2 col-xs-10 uk-margin-left" for="mobile">Mobile</label>
    <div class="col-sm-8 col-xs-10">
      <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Enter Mobile">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-3 col-sm-offset-2 col-xs-10  uk-margin-left" for="email">Email</label>
    <div class="col-sm-8 col-xs-10">
      <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-xs-3 col-sm-offset-2 col-xs-10  uk-margin-left" for="pwd">Password:</label>
    <div class="col-sm-8 col-xs-10"> 
      <input type="password" class="form-control" name="pwd" id="pwd" placeholder="Enter password">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-xs-3 col-sm-offset-2     col-xs-10  uk-margin-left" for="pwd1">Confirm Password:</label>
    <div class="col-sm-8 col-xs-10"> 
      <input type="password" class="form-control"  name="pwd1" id="pwd1" placeholder="Re-Enter password">
    </div>
  </div>
    <div class="row">
     <div class="uk-margin-medium-top col-sm-offset-3 col-sm-3">
        <button type="submit" class="md-btn md-btn-primary md-btn-block md-btn-large ">Register</button>
    </div>
    <div class="uk-margin-medium-top col-sm-offset-1 col-sm-3">
        <a href="{{ url('/login')}}" class="md-btn md-btn-primary md-btn-block md-btn-large ">Sign up</a>
    </div>
    </div>
                    <div class="uk-grid uk-grid-width-1-3 uk-grid-small uk-margin-top uk-margin-left uk-margin-right    ">
                        <div><a href="#" class="md-btn md-btn-block md-btn-facebook" data-uk-tooltip="{pos:'bottom'}" title="Sign in with Facebook"><i class="uk-icon-facebook uk-margin-remove"></i></a></div>
                        <div><a href="#" class="md-btn md-btn-block md-btn-twitter" data-uk-tooltip="{pos:'bottom'}" title="Sign in with Twitter"><i class="uk-icon-twitter uk-margin-remove"></i></a></div>
                        <div><a href="#" class="md-btn md-btn-block md-btn-gplus" data-uk-tooltip="{pos:'bottom'}" title="Sign in with Google+"><i class="uk-icon-google-plus uk-margin-remove"></i></a></div>
                    </div>
                    

            
</form>
  </div>
  <div class="md-card-content large-padding uk-position-relative" id="login_help" style="display: none">
                <button type="button" class="uk-position-top-right uk-close uk-margin-right uk-margin-top back_to_login"></button>
                <h2 class="heading_b uk-text-success">Can't log in?</h2>
                <p>Here’s the info to get you back in to your account as quickly as possible.</p>
                <p>First, try the easiest thing: if you remember your password but it isn’t working, make sure that Caps Lock is turned off, and that your username is spelled correctly, and then try again.</p>
                <p>If your password still isn’t working, it’s time to <a href="#" id="password_reset_show">reset your password</a>.</p>
    </div>

    

    <!-- common functions -->
    <script src="{{url('public/assets/js/common.min.js')}}"></script>
    <!-- uikit functions -->
    <script src="{{url('public/assets/js/uikit_custom.min.js')}}"></script>
    <!-- altair core functions -->
    <script src="{{url('public/assets/js/altair_admin_common.min.js')}}"></script>

    <!-- altair login page functions -->
    

  

</body>
</html>