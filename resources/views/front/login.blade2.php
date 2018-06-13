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
body, html,.login_page {
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


.login_page_wrapper
{
    position: absolute !important;
    top: 20% !important;
    right: 40% !important;
}
.bars
{
    position: absolute !important;
    top: 0% !important;
    right: 0% !important;
    padding: 25px 120px 12px 0px !important;
}


@media only screen and (min-width: 700px) {
.login_page_wrapper
{
    
    position: absolute !important;
    top: 10% !important;
    left: 20% !important;
    
}
.login_page .login_heading
{

}
.md-card
{
    width:650px  !important;
}
}
@media only screen and (min-width: 500px) {
.login_page_wrapper
{
    
    position: absolute !important;
    top: 10% !important;
    left: 0% !important;
    right: 0% !important;
}
.login_page .login_heading
{

}
.md-card
{
    width:350px  !important;
}


}

@media only screen and (min-width: 400px) {
.login_page_wrapper
{
    
    position: absolute !important;
    top: 10% !important;
    left: 0% !important;
    right: 0% !important;
}
.login_page .login_heading
{

}
.md-card
{
    width:300px  !important;
    height:600px  !important;
}


}

@media only screen and (min-width: 300px) {

.login_page_wrapper
{
    
    position: absolute !important;
    top: 10% !important;
    left: 25px !important;
    
}
.login_page .login_heading
{

}
.md-card
{
    width:300px  !important;
    height:450px  !important;
}
#signup_form_show
{
width:300px  !important;
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
<body class="login_page">
<div class="bg"></div>
<!-- <nav class="navbar navbar bar">
  
   
    <ul class="nav navbar-nav">
      
      <li><a href="#">Register</a></li>
      <li><a href="#">Login</a></li>
      
    </ul>
  
</nav> -->
    <div class="login_page_wrapper">
        <div class="md-card" id="login_card">
            <div class="md-card-content large-padding" id="login_form">
                <div class="login_heading">
                    <div class="user_avatar"></div>
                </div>
                <form>
                    <div class="uk-form-row">
                        <label for="login_username">Username</label>
                        <input class="md-input" type="text" id="login_username" name="login_username" />
                    </div>
                    <div class="uk-form-row">
                        <label for="login_password">Password</label>
                        <input class="md-input" type="password" id="login_password" name="login_username" />
                    </div>
                    <div class="uk-margin-medium-top">
                        <a href="index.html" class="md-btn md-btn-primary md-btn-block md-btn-large">Sign In</a>
                    </div>
                    <div class="uk-grid uk-grid-width-1-3 uk-grid-small uk-margin-top">
                        <div><a href="#" class="md-btn md-btn-block md-btn-facebook" data-uk-tooltip="{pos:'bottom'}" title="Sign in with Facebook"><i class="uk-icon-facebook uk-margin-remove"></i></a></div>
                        <div><a href="#" class="md-btn md-btn-block md-btn-twitter" data-uk-tooltip="{pos:'bottom'}" title="Sign in with Twitter"><i class="uk-icon-twitter uk-margin-remove"></i></a></div>
                        <div><a href="#" class="md-btn md-btn-block md-btn-gplus" data-uk-tooltip="{pos:'bottom'}" title="Sign in with Google+"><i class="uk-icon-google-plus uk-margin-remove"></i></a></div>
                    </div>
                    <div class="uk-margin-top">
                        <a href="#" id="login_help_show" class="uk-float-right">Need help?</a>
                        <span class="icheck-inline">
                            <input type="checkbox" name="login_page_stay_signed" id="login_page_stay_signed" data-md-icheck />
                            <label for="login_page_stay_signed" class="inline-label">Stay signed in</label>
                        </span>
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
            <div class="md-card-content large-padding" id="login_password_reset" style="display: none">
                <button type="button" class="uk-position-top-right uk-close uk-margin-right uk-margin-top back_to_login"></button>
                <h2 class="heading_a uk-margin-large-bottom">Reset password</h2>
                <form>
                    <div class="uk-form-row">
                        <label for="login_email_reset">Your email address</label>
                        <input class="md-input" type="text" id="login_email_reset" name="login_email_reset" />
                    </div>
                    <div class="uk-margin-medium-top">
                        <a href="index.html" class="md-btn md-btn-primary md-btn-block">Reset password</a>
                    </div>
                </form>
            </div>
            <div class="md-card-content large-padding" id="register_form" style="display: none">
                <button type="button" class="uk-position-top-right uk-close uk-margin-right uk-margin-top back_to_login"></button>
                <h2 class="heading_a uk-margin-medium-bottom">Create an account</h2>
                <form>

                    <div class="uk-form-row">
                        <label for="register_username">Select Type</label>
                        <select name="" class="form-control" >
                            <option value="">Register Type</option>
                            <option value="4">Normal user</option>
                            <option value="2">Mall</option>
                            <option value="3">Shop / Company</option>
                            
                        </select>
                    </div>
                    <div class="uk-form-row">
                        <label for="register_email">E-mail</label>
                        <input class="md-input" type="text" id="register_email" name="register_email" />
                    </div>

                    <div class="uk-form-row">
                        <label for="register_password">Password</label>
                        <input class="md-input" type="text" id="register_username" name="register_username" />
                        
                    </div>
                    <div class="uk-form-row">
                        <label for="register_password_repeat">Repeat Password</label>
                        <input class="md-input" type="password" id="register_password_repeat" name="register_password_repeat" />
                    </div>
                    
                    <div class="uk-margin-medium-top">
                        <a href="index.html" class="md-btn md-btn-primary md-btn-block md-btn-large">Sign Up</a>
                    </div>
                </form>
            </div>
        </div>
        <footer class="uk-margin-top uk-text-center">
        
            <a href="#" class="md-text-bold" id="signup_form_show">Create an account</a>
        </footer>
    </div>

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