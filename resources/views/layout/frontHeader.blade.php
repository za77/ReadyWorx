  <div class="top-bar">
    <div class="container">
      <ul class="left-bar-side">
        <li> <a href="{{ url('/login') }}"><i class="fa fa-lock"></i> Login</a> </li>
        <li> <a href="{{ url('/account') }}"><i class="fa fa-user"></i> My Account</a> </li>
        <!-- <li> <a href="#."><i class="fa fa-heart"></i> My Favourites </a></li> -->
      </ul>
      <ul class="right-bar-side social_icons">
        <li class="facebook"> <a href="#."><i class="fa fa-facebook"></i> </a></li>
        <li class="twitter"> <a href="#."><i class="fa fa-twitter"></i> </a></li>
        <!-- <li class="linkedin"> <a href="#."><i class="fa fa-linkedin"></i> </a></li>
        <li class="tumblr"> <a href="#."><i class="fa fa-tumblr"></i> </a></li> -->
      </ul>
    </div>
  </div>

 <header>
    <div class="container"> 
      
      <!--======= LOGO =========-->
      <div class="logo"> <a href="#."><img src="{{url('public/front/images/logo.png')}}" alt="" ></a> </div>
      
      <!--======= SEARCH =========-->
      <!-- <div class="search">
        <select class="form-control">
          <option>All Categories</option>
          <option>Exclusive</option>
          <option>Coupon</option>
          <option>Cashback</option>
        </select>
        <input class="form-control" placeholder="Enter your keyword...">
        <button type="submit"><i class="fa fa-search"></i></button>
      </div> -->
    </div>
    
    <!--======= NAV =========-->
    <nav>
      <div class="container"> 
        
        <!--======= MENU START =========-->
        <ul class="ownmenu">
          <li class="active"><a href="{{ url('/') }}">Home</a>
            <ul class="dropdown">
              <li><a href="02-index.html">Home 2</a></li>
            </ul>
          </li>
          <li><a href="{{ url('/about') }}">About us</a></li>
          <li><a href="{{ url('/category') }}">categories</a> 
            <!--======= DROP DOWN =========-->
            <ul class="dropdown">
              <li><a href="06-by-categories.html">Apparel</a></li>
              <li><a href="06-by-categories.html">Automotive</a></li>
              <li><a href="06-by-categories.html">Baby Items</a></li>
              <li><a href="06-by-categories.html">beverages</a></li>
              <li><a href="04-coupons.html">coupon codes</a></li>
            </ul>
          </li>
          <li><a href="{{ url('/stores') }}">Stores</a></li>
          <li><a href="{{ url('/coupons') }}">coupon codes</a> </li>
          {{-- <li><a href="10-Blog.html">BLOG</a> 
          
          <!--======= MEGA MENU =========-->
          <div class="megamenu full-width">
            <h5>Recent post</h5>
            <div class="row nav-post">
              <div class="col-sm-4 boder-da-r">
                <ul class="row">
                  <li>
                    <div class="img-nav"> <img class="img-responsive" src="{{url('public/front/images/nav-img-1.jpg')}}" alt=""> </div>
                    <div class="nav-text"> <a href="#.">Intex Aqua Style X Android 4.4 KitKat handset found listed</a> <span><i class="fa fa-calendar"></i> November 15, 2014</span> </div>
                  </li>
                  <li>
                    <div class="img-nav"> <img class="img-responsive" src="{{url('public/front/images/nav-img-2.jpg')}}" alt=""> </div>
                    <div class="nav-text"> <a href="#.">Vibram Men's & Women's Five Fingers Athletic</a> <span><i class="fa fa-calendar"></i> November 15, 2014</span> </div>
                  </li>
                  <li>
                    <div class="img-nav"> <img class="img-responsive" src="{{url('public/front/images/nav-img-3.jpg')}}" alt=""> </div>
                    <div class="nav-text"> <a href="#.">Bluetooth Rechargeable Mini Speaker </a> <span><i class="fa fa-calendar"></i> November 15, 2014</span> </div>
                  </li>
                </ul>
              </div>
              <div class="col-sm-4 boder-da-r">
                <div class="nav-big"> <a href="#.">Beltronics Professional Series Radar/Laser</a> <img class="img-responsive" src="{{url('public/front/images/nav-img-4.jpg')}}" alt="">
                  <p>Show tonight. Now were up in the big leagues getting' our turn at bat. Come and play. Everything .</p>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="nav-big"> <a href="#.">Beltronics Professional Series Radar/Laser</a> <img class="img-responsive" src="{{url('public/front/images/nav-img-5.jpg')}}" alt="">
                  <p>Show tonight. Now were up in the big leagues getting' our turn at bat. Come and play. Everything .</p>
                </div>
              </div>
            </div>
          </div>
          </li>--}}
          <li><a href="{{ url('/contact') }}">Contact</a> </li>
          {{-- <li><a href="14-Elements.html">All Pages</a> 
            <!--======= DROP DOWN =========-->
            <ul class="dropdown">
              <li><a href="index-2.html">Home</a></li>
              <li><a href="02-index.html">Home 2</a></li>
              <li><a href="03-About-Us.html">About</a></li>
              <li><a href="04-coupons.html">Coupons</a></li>
              <li><a href="05-products.html">Products</a></li>
              <li><a href="06-by-categories.html">Categories</a></li>
              <li><a href="07-By-Stores.html">Stores</a></li>
              <li><a href="08-Signup.html">Sign Up</a></li>
              <li><a href="09-Submit-Coupon.html">Submit Coupon</a></li>
              <li><a href="10-Blog.html">Blog</a></li>
              <li><a href="11-Single-post.html">Single post</a></li>
              <li><a href="14-Elements.html">Elements</a></li>
              <li><a href="15-404.html">404</a></li>
              <li><a href="16-Contact.html">Conatct</a></li>
            </ul>
          </li>--}}
        </ul>
        
        <!--======= SUBMIT COUPON =========-->
        <div class="sub-nav-co"> <a href="#.">Submit coupon</a> </div>
      </div>
    </nav>
  </header>
  