

@extends('layout.frontApp')
@section('page')
  <!--======= BANNER =========-->
  <div id="banner">
    <div class="flexslider">
      <ul class="slides">
        <li> <img src="{{url('public/front/images/slide-1.jpg')}}" alt="" > 
          
          <!--======= BANNER INNER =========-->
          
          <div class="banner-up">
            <div class="container">
              <div class="slide-products">
                <div class="col-xs-6 no-padding"> 
                  
                  <!--======= BANNER TEXT =========-->
                  <div class="text-slide">
                    <h1>Hiking Accesories</h1>
                    <p>Happy Days are yours and mine Happy Days. Didn't need no welfare states.</p>
                    <span class="slider-price">$49.00</span> </div>
                </div>
                
                <!--======= BANNER IMAGE =========-->
                <div class="col-xs-6 no-padding">
                  <div class="img-slide"> <img class="img-responsive" src="{{url('public/front/images/slide-item-2.jpg')}}" alt="" > </div>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li> <img src="{{url('public/front/images/slide-2.jpg')}}" alt="" > 
          
          <!--======= BANNER INNER =========-->
          
          <div class="banner-up">
            <div class="container">
              <div class="slide-products"> 
                
                <!--======= BANNER IMAGE =========-->
                <div class="col-xs-6 no-padding">
                  <div class="img-slide"> <img class="img-responsive" src="{{url('public/front/images/slide-item-1.jpg')}}" alt="" > </div>
                </div>
                <div class="col-xs-6 no-padding"> 
                  
                  <!--======= BANNER TEXT =========-->
                  <div class="text-slide">
                    <h1>Today’s big deals</h1>
                    <p>Happy Days are yours and mine Happy Days. Didn't need no welfare states.</p>
                    <span class="slider-price">$49.00</span> </div>
                </div>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
  
  <!--======= BANNER =========-->
  <section class="great-deals">
    <div class="container"> 
      <!--======= TITTLE =========-->
      <div class="tittle">
        <h3>great deals of the day</h3>
      </div>
      <div class="coupon">
        <ul class="row">
          
          <!--======= COUPEN DEALS =========-->
          <li class="col-sm-4">
            <div class="coupon-inner">
              <div class="top-tag"> <span class="ribn-red"><span>exclusive</span></span> <span class="star"><i class="fa fa-star-o"></i></span> </div>
              <div class="c-img"> <img class="img-responsive" src="{{url('public/front/images/c-img-1.jpg')}}" alt="" > <a class="head" href="#.">Flat 40% off Hotel Bookings In 10 Cities  Near you</a>
                <p>Experies On : Jan 17, 2014</p>
                <div class="text-center"> <a href="#." class="btn">get coupon code</a> </div>
              </div>
              <ul class="btm-info">
                <li class="col-xs-4"> <i class="fa fa-check-square-o"></i> Verified</li>
                <li class="col-xs-3"> <i class="fa fa-bookmark"></i> Save</li>
                <li class="col-xs-2"> <i class="fa fa-share"></i> Share</li>
                <li class="col-xs-3"> <i class="fa fa-comments"></i> Discuss</li>
              </ul>
            </div>
          </li>
          
          <!--======= COUPEN DEALS =========-->
          <li class="col-sm-4">
            <div class="coupon-inner">
              <div class="top-tag"> <span class="ribn-red"><span>exclusive</span></span> <span class="star"><i class="fa fa-star-o"></i></span> </div>
              <div class="c-img"> <img class="img-responsive" src="{{url('public/front/images/c-img-2.jpg')}}" alt="" > <a class="head" href="#.">Flat 40% off Hotel Bookings In 10 Cities  Near you</a>
                <p>Experies On : Jan 17, 2014</p>
                <div class="text-center"> <a href="#." class="btn">get coupon code</a> </div>
              </div>
              <ul class="btm-info">
                <li class="col-xs-4"> <i class="fa fa-check-square-o"></i> Verified</li>
                <li class="col-xs-3"> <i class="fa fa-bookmark"></i> Save</li>
                <li class="col-xs-2"> <i class="fa fa-share"></i> Share</li>
                <li class="col-xs-3"> <i class="fa fa-comments"></i> Discuss</li>
              </ul>
            </div>
          </li>
          
          <!--======= COUPEN DEALS =========-->
          <li class="col-sm-4">
            <div class="coupon-inner">
              <div class="top-tag"> <span class="ribn-pur"><span>coupon</span></span> <span class="star"><i class="fa fa-star-o"></i></span> </div>
              <div class="c-img"> <img class="img-responsive" src="{{url('public/front/images/c-img-3.jpg')}}" alt="" > <a class="head" href="#.">Flat 40% off Hotel Bookings In 10 Cities  Near you</a>
                <p>Experies On : Jan 17, 2014</p>
                <div class="text-center"> <a href="#." class="btn">get coupon code</a> </div>
              </div>
              <ul class="btm-info">
                <li class="col-xs-4"> <i class="fa fa-check-square-o"></i> Verified</li>
                <li class="col-xs-3"> <i class="fa fa-bookmark"></i> Save</li>
                <li class="col-xs-2"> <i class="fa fa-share"></i> Share</li>
                <li class="col-xs-3"> <i class="fa fa-comments"></i> Discuss</li>
              </ul>
            </div>
          </li>
          
          <!--======= COUPEN DEALS =========-->
          <li class="col-sm-4">
            <div class="coupon-inner">
              <div class="top-tag"> <span class="ribn-pur"><span>cashback</span></span> <span class="star"><i class="fa fa-star-o"></i></span> </div>
              <div class="c-img"> <img class="img-responsive" src="{{url('public/front/images/c-img-4.jpg')}}" alt="" > <a class="head" href="#.">Flat 40% off Hotel Bookings In 10 Cities  Near you</a>
                <p>Experies On : Jan 17, 2014</p>
                <div class="text-center"> <a href="#." class="btn">get coupon code</a> </div>
              </div>
              <ul class="btm-info">
                <li class="col-xs-4"> <i class="fa fa-check-square-o"></i> Verified</li>
                <li class="col-xs-3"> <i class="fa fa-bookmark"></i> Save</li>
                <li class="col-xs-2"> <i class="fa fa-share"></i> Share</li>
                <li class="col-xs-3"> <i class="fa fa-comments"></i> Discuss</li>
              </ul>
            </div>
          </li>
          
          <!--======= COUPEN DEALS =========-->
          <li class="col-sm-4">
            <div class="coupon-inner">
              <div class="top-tag"> <span class="ribn-red"><span>exclusive</span></span> <span class="star"><i class="fa fa-star-o"></i></span> </div>
              <div class="c-img"> <img class="img-responsive" src="{{url('public/front/images/c-img-5.jpg')}}" alt="" > <a class="head" href="#.">Flat 40% off Hotel Bookings In 10 Cities  Near you</a>
                <p>Experies On : Jan 17, 2014</p>
                <div class="text-center"> <a href="#." class="btn">get coupon code</a> </div>
              </div>
              <ul class="btm-info">
                <li class="col-xs-4"> <i class="fa fa-check-square-o"></i> Verified</li>
                <li class="col-xs-3"> <i class="fa fa-bookmark"></i> Save</li>
                <li class="col-xs-2"> <i class="fa fa-share"></i> Share</li>
                <li class="col-xs-3"> <i class="fa fa-comments"></i> Discuss</li>
              </ul>
            </div>
          </li>
          
          <!--======= COUPEN DEALS =========-->
          <li class="col-sm-4">
            <div class="coupon-inner">
              <div class="top-tag"> <span class="ribn-pur"><span>coupon</span></span> <span class="star"><i class="fa fa-star-o"></i></span> </div>
              <div class="c-img"> <img class="img-responsive" src="{{url('public/front/images/c-img-6.jpg')}}" alt="" > <a class="head" href="#.">Flat 40% off Hotel Bookings In 10 Cities  Near you</a>
                <p>Experies On : Jan 17, 2014</p>
                <div class="text-center"> <a href="#." class="btn">get coupon code</a> </div>
              </div>
              <ul class="btm-info">
                <li class="col-xs-4"> <i class="fa fa-check-square-o"></i> Verified</li>
                <li class="col-xs-3"> <i class="fa fa-bookmark"></i> Save</li>
                <li class="col-xs-2"> <i class="fa fa-share"></i> Share</li>
                <li class="col-xs-3"> <i class="fa fa-comments"></i> Discuss</li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </section>
  
  <!--======= FEATURED CATEGORIES =========-->
  <section class="featured">
    <div class="container"> 
      <!--======= TITTLE =========-->
      <div class="tittle">
        <h3>featured categories</h3>
      </div>
      <div class="fea-cate"> 
        
        <!--======= CATEGORIES 1 =========-->
        <div class="cate-in">
          <div class="cate"> <img src="{{url('public/front/images/f-img-1.jpg')}}" alt="" >
            <div class="cate-over"> <i class="fa fa-shopping-cart"></i>
              <div class="after-over animated flipInY">
                <p>25 coupon inside</p>
                <a href="#.">SHOP NOW</a> </div>
            </div>
            <!--======= TITTLE =========-->
            <div class="cate-tittle"> Apparel </div>
          </div>
        </div>
        <!--======= CATEGORIES 1 =========-->
        
        <div class="cate-in">
          <div class="cate"> <img src="{{url('public/front/images/f-img-2.jpg')}}" alt="" >
            <div class="cate-over"> <i class="fa fa-car"></i>
              <div class="after-over animated flipInY">
                <p>25 coupon inside</p>
                <a href="#.">SHOP NOW</a> </div>
            </div>
            <!--======= TITTLE =========-->
            <div class="cate-tittle"> automotive </div>
          </div>
        </div>
        
        <!--======= CATEGORIES 1 =========-->
        <div class="cate-in">
          <div class="cate"> <img src="{{url('public/front/images/f-img-3.jpg')}}" alt="" >
            <div class="cate-over"> <i class="fa fa-child"></i>
              <div class="after-over animated flipInY">
                <p>25 coupon inside</p>
                <a href="#.">SHOP NOW</a> </div>
            </div>
            <!--======= TITTLE =========-->
            <div class="cate-tittle"> baby & toddler </div>
          </div>
        </div>
        
        <!--======= CATEGORIES 1 =========-->
        <div class="cate-in">
          <div class="cate"> <img src="{{url('public/front/images/f-img-1.jpg')}}" alt="" >
            <div class="cate-over"> <i class="fa fa-globe"></i>
              <div class="after-over animated flipInY">
                <p>25 coupon inside</p>
                <a href="#.">SHOP NOW</a> </div>
            </div>
            <!--======= TITTLE =========-->
            <div class="cate-tittle"> beverages </div>
          </div>
        </div>
        
        <!--======= CATEGORIES 1 =========-->
        <div class="cate-in">
          <div class="cate"> <img src="{{url('public/front/images/f-img-1.jpg')}}" alt="" >
            <div class="cate-over"> <i class="fa fa-shopping-cart"></i>
              <div class="after-over animated flipInY">
                <p>25 coupon inside</p>
                <a href="#.">SHOP NOW</a> </div>
            </div>
            <!--======= TITTLE =========-->
            <div class="cate-tittle"> Apparel </div>
          </div>
        </div>
        
        <!--======= CATEGORIES 1 =========-->
        <div class="cate-in">
          <div class="cate"> <img src="{{url('public/front/images/f-img-2.jpg')}}" alt="" >
            <div class="cate-over"> <i class="fa fa-car"></i>
              <div class="after-over animated flipInY">
                <p>25 coupon inside</p>
                <a href="#.">SHOP NOW</a> </div>
            </div>
            <!--======= TITTLE =========-->
            <div class="cate-tittle"> automotive </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!--======= BLOG =========-->
  <section class="blog">
    <div class="container"> 
      <!--======= TITTLE =========-->
      <div class="tittle">
        <h3>recent from our blog</h3>
      </div>
      
      <!--======= BLOG ROW =========-->
      <ul class="row">
        
        <!--======= BLOG 1 =========-->
        <li class="col-sm-4">
          <div class="b-img"> <img class="img-responsive" src="{{url('public/front/images/b-img-1.jpg')}}" alt="" >
            <div class="b-over animated pulse"> <a href="#."><i class="fa fa-search"></i> </a> </div>
          </div>
          <div class="b-details">
            <h6><a href="#.">world today takes everything</a></h6>
            <ul class="tag-info">
              <li> <i class="fa fa-camera"></i> Photography <span> / </span> </li>
              <li> <i class="fa fa-user"></i> By Admin <span> / </span></li>
              <li><i class="fa fa-comments"></i> 5 Comments </li>
            </ul>
            <p>Can you tell me how to get how to get to Sesame Street. Flying away on a wing and a prayer.It be
              Believe it or not its just me.</p>
          </div>
        </li>
        
        <!--======= BLOG 2 =========-->
        <li class="col-sm-4">
          <div class="b-img"> <img class="img-responsive" src="{{url('public/front/images/b-img-2.jpg')}}" alt="" >
            <div class="b-over animated pulse"> <a href="#."><i class="fa fa-search"></i> </a> </div>
          </div>
          <div class="b-details">
            <h6><a href="#.">It's time to raise the curtain</a></h6>
            <ul class="tag-info">
              <li> <i class="fa fa-camera"></i> Photography <span> / </span> </li>
              <li> <i class="fa fa-user"></i> By Admin <span> / </span></li>
              <li><i class="fa fa-comments"></i> 5 Comments </li>
            </ul>
            <p>Can you tell me how to get how to get to Sesame Street. Flying away on a wing and a prayer.It be
              Believe it or not its just me.</p>
          </div>
        </li>
        
        <!--======= BLOG 3 =========-->
        <li class="col-sm-4">
          <div class="b-img"> <img class="img-responsive" src="{{url('public/front/images/b-img-3.jpg')}}" alt="" >
            <div class="b-over animated pulse"> <a href="#."><i class="fa fa-search"></i> </a> </div>
          </div>
          <div class="b-details">
            <h6><a href="#."> A man is born he's a man of means</a></h6>
            <ul class="tag-info">
              <li> <i class="fa fa-camera"></i> Photography <span> / </span> </li>
              <li> <i class="fa fa-user"></i> By Admin <span> / </span></li>
              <li><i class="fa fa-comments"></i> 5 Comments </li>
            </ul>
            <p>Can you tell me how to get how to get to Sesame Street. Flying away on a wing and a prayer.It be
              Believe it or not its just me.</p>
          </div>
        </li>
      </ul>
    </div>
  </section>
  
  <!--======= BLOG =========-->
  <section class="top-w-deal">
    <div class="container"> 
      <!--======= TITTLE =========-->
      <div class="tittle">
        <h3>top deals of the week</h3>
      </div>
      <ul class="row">
        
        <!--======= WEEK DEAL 1 =========-->
        <li>
          <div class="w-deal-in"> <img class="img-responsive" src="{{url('public/front/images/d-img-1.jpg')}}" alt="" >
            <p>Up to $20 cashback &
              7 coupons</p>
            
            <!--======= HOVER DETAL =========-->
            <div class="w-over"> <a href="#.">show deal</a> </div>
          </div>
        </li>
        
        <!--======= WEEK DEAL 1 =========-->
        <li>
          <div class="w-deal-in"> <img class="img-responsive" src="{{url('public/front/images/d-img-2.jpg')}}" alt="" >
            <p>Up to $20 cashback &
              7 coupons</p>
            
            <!--======= HOVER DETAL =========-->
            <div class="w-over"> <a href="#.">show deal</a> </div>
          </div>
        </li>
        
        <!--======= WEEK DEAL 1 =========-->
        <li>
          <div class="w-deal-in"> <img class="img-responsive" src="{{url('public/front/images/d-img-3.jpg')}}" alt="" >
            <p>Up to $20 cashback &
              7 coupons</p>
            
            <!--======= HOVER DETAL =========-->
            <div class="w-over"> <a href="#.">show deal</a> </div>
          </div>
        </li>
        
        <!--======= WEEK DEAL 1 =========-->
        <li>
          <div class="w-deal-in"> <img class="img-responsive" src="{{url('public/front/images/d-img-10.jpg')}}" alt="" >
            <p>Up to $20 cashback &
              7 coupons</p>
            
            <!--======= HOVER DETAL =========-->
            <div class="w-over"> <a href="#.">show deal</a> </div>
          </div>
        </li>
        
        <!--======= WEEK DEAL 1 =========-->
        <li>
          <div class="w-deal-in"> <img class="img-responsive" src="{{url('public/front/images/d-img-4.jpg')}}" alt="" >
            <p>Up to $20 cashback &
              7 coupons</p>
            
            <!--======= HOVER DETAL =========-->
            <div class="w-over"> <a href="#.">show deal</a> </div>
          </div>
        </li>
        
        <!--======= WEEK DEAL 1 =========-->
        <li>
          <div class="w-deal-in"> <img class="img-responsive" src="{{url('public/front/images/d-img-5.jpg')}}" alt="" >
            <p>Up to $20 cashback &
              7 coupons</p>
            
            <!--======= HOVER DETAL =========-->
            <div class="w-over"> <a href="#.">show deal</a> </div>
          </div>
        </li>
        
        <!--======= WEEK DEAL 1 =========-->
        <li>
          <div class="w-deal-in"> <img class="img-responsive" src="{{url('public/front/images/d-img-6.jpg')}}" alt="" >
            <p>Up to $20 cashback &
              7 coupons</p>
            
            <!--======= HOVER DETAL =========-->
            <div class="w-over"> <a href="#.">show deal</a> </div>
          </div>
        </li>
        
        <!--======= WEEK DEAL 1 =========-->
        <li>
          <div class="w-deal-in"> <img class="img-responsive" src="{{url('public/front/images/d-img-7.jpg')}}" alt="" >
            <p>Up to $20 cashback &
              7 coupons</p>
            
            <!--======= HOVER DETAL =========-->
            <div class="w-over"> <a href="#.">show deal</a> </div>
          </div>
        </li>
        
        <!--======= WEEK DEAL 1 =========-->
        <li>
          <div class="w-deal-in"> <img class="img-responsive" src="{{url('public/front/images/d-img-8.jpg')}}" alt="" >
            <p>Up to $20 cashback &
              7 coupons</p>
            
            <!--======= HOVER DETAL =========-->
            <div class="w-over"> <a href="#.">show deal</a> </div>
          </div>
        </li>
        
        <!--======= WEEK DEAL 1 =========-->
        <li>
          <div class="w-deal-in"> <img class="img-responsive" src="{{url('public/front/images/d-img-9.jpg')}}" alt="" >
            <p>Up to $20 cashback &
              7 coupons</p>
            
            <!--======= HOVER DETAL =========-->
            <div class="w-over"> <a href="#.">show deal</a> </div>
          </div>
        </li>
      </ul>
    </div>
  </section>
  @endsection