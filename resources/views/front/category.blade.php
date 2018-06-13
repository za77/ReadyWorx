

@extends('layout.frontApp')
@section('page')
  

   <!--======= BANNER =========-->
  <section class="sub-banner">
    <div class="overlay">
      <div class="container">
        <h2>Products</h2>
        <ul class="sub-nav">
          <li><a href="#."><i class="fa fa-home"></i></a> / </li>
          <li><a href="#.">products</a></li>
        </ul>
      </div>
    </div>
  </section>
  
  <!--======= PORTFOLIO =========-->
  <section id="portfolio">
    <div class="portfolio portfolio-filter"> 
      
      <!--======= PORTFOLIO ITEMS =========-->
      <div class="portfolio-wrapper">
        <div class="container"> 
          
          <!--======= PORTFOLIO FILTER =========-->
          <ul class="filter">
            <li><a class="active" href="#." data-filter="*">All  offers</a></li>
            <li><a href="#" data-filter=".free">free shipping</a></li>
            <li><a href="#" data-filter=".store">store wide</a></li>
            <li><a href="#" data-filter=".hot">hot deals</a></li>
            <li><a href="#" data-filter=".best">best seller</a></li>
            <li class="pull-right">
              <select>
                <option value="Category Name">view category</option>
                <option value="Category Name">Category Name</option>
                <option value="Category Name">Category Name</option>
                <option value="Category Name">view category</option>
                <option value="Category Name">Category Name</option>
                <option value="Category Name">Category Name</option>
              </select>
            </li>
          </ul>
          
          <!--======= ITEMS =========-->
          <ul class="items">
            
            <!--======= ITEM =========-->
            <li class="item store hot best">
              <div class="prod-item">
                <div class="top-brand"> <img src="{{url('public/front/images/sm-img-1.jpg')}}" alt="" >
                  <div class="up-to"> <span>UP TO 2.5%</span> <span>CASHBACK</span> </div>
                </div>
                
                <!--======= ITEM IMAGE =========--> 
                <img class="img-responsive img-product" src="{{url('public/front/images/product-img-1.jpg')}}" alt="" >
                <h5><a href="#."> 5Ladies Express Cotton Dress </a></h5>
                
                <!--======= ITEM INFO =========-->
                <div class="items-info">
                  <h5>$251.99 <span>$300.99</span> </h5>
                  <span class="free-ship">FREE SHIPPING</span>
                  <div class="clearfix"></div>
                  <a href="#." class="btn">SHOP NOW</a> </div>
              </div>
            </li>
            
            <!--======= ITEM =========-->
            <li class="item free hot best">
              <div class="prod-item">
                <div class="top-brand"> <img src="{{url('public/front/images/sm-img-2.png')}}" alt="" >
                  <div class="up-to"> <span>UP TO 2.5%</span> <span>CASHBACK</span> </div>
                </div>
                
                <!--======= ITEM IMAGE =========--> 
                <img class="img-responsive img-product" src="{{url('public/front/images/product-img-2.jpg')}}" alt="" >
                <h5><a href="#.">Mercedes SLS AMG Push Car </a></h5>
                
                <!--======= ITEM INFO =========-->
                <div class="items-info">
                  <h5>$355.99 <span>$455.99</span> </h5>
                  <span class="free-ship">FREE SHIPPING</span>
                  <div class="clearfix"></div>
                  <a href="#." class="btn">SHOP NOW</a> </div>
              </div>
            </li>
            
            <!--======= ITEM =========-->
            <li class="item free store best">
              <div class="prod-item">
                <div class="top-brand"> <img src="{{url('public/front/images/sm-img-3.png')}}" alt="" >
                  <div class="up-to"> <span>UP TO 2.5%</span> <span>CASHBACK</span> </div>
                </div>
                
                <!--======= ITEM IMAGE =========--> 
                <img class="img-responsive img-product" src="{{url('public/front/images/product-img-3.jpg')}}" alt="" >
                <h5><a href="#."> Bluetooth Rechargeable Mini Speaker </a></h5>
                
                <!--======= ITEM INFO =========-->
                <div class="items-info">
                  <h5>$589.00 <span>$689.00</span> </h5>
                  <span class="free-ship">FREE SHIPPING</span>
                  <div class="clearfix"></div>
                  <a href="#." class="btn">SHOP NOW</a> </div>
              </div>
            </li>
            
            <!--======= ITEM =========-->
            <li class="item free store hot">
              <div class="prod-item">
                <div class="top-brand"> <img src="{{url('public/front/images/sm-img-4.png')}}" alt="" >
                  <div class="up-to"> <span>UP TO 2.5%</span> <span>CASHBACK</span> </div>
                </div>
                
                <!--======= ITEM IMAGE =========--> 
                <img class="img-responsive img-product" src="{{url('public/front/images/product-img-4.jpg')}}" alt="" >
                <h5><a href="#."> Asus VivoBook 13.3" Touch Notebook </a></h5>
                
                <!--======= ITEM INFO =========-->
                <div class="items-info">
                  <h5>$45875.99 </h5>
                  <div class="clearfix"></div>
                  <a href="#." class="btn">SHOP NOW</a> </div>
              </div>
            </li>
            
            <!--======= ITEM =========-->
            <li class="item store hot">
              <div class="prod-item">
                <div class="top-brand"> <img src="{{url('public/front/images/sm-img-5.png')}}" alt="" >
                  <div class="up-to"> <span>UP TO 2.5%</span> <span>CASHBACK</span> </div>
                </div>
                
                <!--======= ITEM IMAGE =========--> 
                <img class="img-responsive img-product" src="{{url('public/front/images/product-img-5.jpg')}}" alt="" >
                <h5><a href="#."> Dell XPS 13 Signature Laptop w/ 1.7GHz </a></h5>
                
                <!--======= ITEM INFO =========-->
                <div class="items-info">
                  <h5>$58964.00 </h5>
                  <div class="clearfix"></div>
                  <a href="#." class="btn">SHOP NOW</a> </div>
              </div>
            </li>
            
            <!--======= ITEM =========-->
            <li class="item free hot">
              <div class="prod-item">
                <div class="top-brand"> <img src="{{url('public/front/images/sm-img-6.png')}}" alt="" >
                  <div class="up-to"> <span>UP TO 2.5%</span> <span>CASHBACK</span> </div>
                </div>
                
                <!--======= ITEM IMAGE =========--> 
                <img class="img-responsive img-product" src="{{url('public/front/images/product-img-6.jpg')}}" alt="" >
                <h5><a href="#."> Vibram Men's & Women's Five Fingers Athletic </a></h5>
                
                <!--======= ITEM INFO =========-->
                <div class="items-info">
                  <h5>$2589.00 <span>$2689.00</span> </h5>
                  <span class="free-ship">FREE SHIPPING</span>
                  <div class="clearfix"></div>
                  <a href="#." class="btn">SHOP NOW</a> </div>
              </div>
            </li>
            
            <!--======= ITEM =========-->
            <li class="item free store best">
              <div class="prod-item">
                <div class="top-brand"> <img src="{{url('public/front/images/sm-img-1.png')}}" alt="" >
                  <div class="up-to"> <span>UP TO 2.5%</span> <span>CASHBACK</span> </div>
                </div>
                
                <!--======= ITEM IMAGE =========--> 
                <img class="img-responsive img-product" src="{{url('public/front/images/product-img-7.jpg')}}" alt="" >
                <h5><a href="#."> Sony Back Panel in 5 Bright Colors </a></h5>
                
                <!--======= ITEM INFO =========-->
                <div class="items-info">
                  <h5>$2589.00 <span>$2689.00</span> </h5>
                  <span class="free-ship">FREE SHIPPING</span>
                  <div class="clearfix"></div>
                  <a href="#." class="btn">SHOP NOW</a> </div>
              </div>
            </li>
            
            <!--======= ITEM =========-->
            <li class="item hot best">
              <div class="prod-item">
                <div class="top-brand"> <img src="{{url('public/front/images/sm-img-2.png')}}" alt="" >
                  <div class="up-to"> <span>UP TO 2.5%</span> <span>CASHBACK</span> </div>
                </div>
                
                <!--======= ITEM IMAGE =========--> 
                <img class="img-responsive img-product" src="{{url('public/front/images/product-img-8.jpg')}}" alt="" >
                <h5><a href="#."> Volvo Drink Glass Extra - 150ml </a></h5>
                
                <!--======= ITEM INFO =========-->
                <div class="items-info">
                  <h5>$2589.00 <span>$2689.00</span> </h5>
                  <span class="free-ship">FREE SHIPPING</span>
                  <div class="clearfix"></div>
                  <a href="#." class="btn">SHOP NOW</a> </div>
              </div>
            </li>
            
            <!--======= ITEM =========-->
            <li class="item free best">
              <div class="prod-item">
                <div class="top-brand"> <img src="{{url('public/front/images/sm-img-3.png')}}" alt="" >
                  <div class="up-to"> <span>UP TO 2.5%</span> <span>CASHBACK</span> </div>
                </div>
                
                <!--======= ITEM IMAGE =========--> 
                <img class="img-responsive img-product" src="{{url('public/front/images/product-img-9.jpg')}}" alt="" >
                <h5><a href="#."> Combo Pack Of Black Pair Dress Collection</a></h5>
                
                <!--======= ITEM INFO =========-->
                <div class="items-info">
                  <h5>$2589.00 <span>$2689.00</span> </h5>
                  <span class="free-ship">FREE SHIPPING</span>
                  <div class="clearfix"></div>
                  <a href="#." class="btn">SHOP NOW</a> </div>
              </div>
            </li>
            
            <!--======= ITEM =========-->
            <li class="item store hot best">
              <div class="prod-item">
                <div class="top-brand"> <img src="{{url('public/front/images/sm-img-4.png')}}" alt="" >
                  <div class="up-to"> <span>UP TO 2.5%</span> <span>CASHBACK</span> </div>
                </div>
                
                <!--======= ITEM IMAGE =========--> 
                <img class="img-responsive img-product" src="{{url('public/front/images/product-img-10.jpg')}}" alt="" >
                <h5><a href="#."> Pure Jwels With 5 Diffrent Diomond</a></h5>
                
                <!--======= ITEM INFO =========-->
                <div class="items-info">
                  <h5>$2589.00 <span>$2689.00</span> </h5>
                  <span class="free-ship">FREE SHIPPING</span>
                  <div class="clearfix"></div>
                  <a href="#." class="btn">SHOP NOW</a> </div>
              </div>
            </li>
            
            <!--======= ITEM =========-->
            <li class="item free store hot">
              <div class="prod-item">
                <div class="top-brand"> <img src="{{url('public/front/images/sm-img-5.png')}}" alt="" >
                  <div class="up-to"> <span>UP TO 2.5%</span> <span>CASHBACK</span> </div>
                </div>
                
                <!--======= ITEM IMAGE =========--> 
                <img class="img-responsive img-product" src="{{url('public/front/images/product-img-11.jpg')}}" alt="" >
                <h5><a href="#."> Sunlight Black Cooler Glass </a></h5>
                
                <!--======= ITEM INFO =========-->
                <div class="items-info">
                  <h5>$2589.00 <span>$2689.00</span> </h5>
                  <span class="free-ship">FREE SHIPPING</span>
                  <div class="clearfix"></div>
                  <a href="#." class="btn">SHOP NOW</a> </div>
              </div>
            </li>
            
            <!--======= ITEM =========-->
            <li class="item free hot best">
              <div class="prod-item">
                <div class="top-brand"> <img src="{{url('public/front/images/sm-img-6.png')}}" alt="" >
                  <div class="up-to"> <span>UP TO 2.5%</span> <span>CASHBACK</span> </div>
                </div>
                
                <!--======= ITEM IMAGE =========--> 
                <img class="img-responsive img-product" src="{{url('public/front/images/product-img-12.jpg')}}" alt="" >
                <h5><a href="#."> Loreal Skin Package Cream </a></h5>
                
                <!--======= ITEM INFO =========-->
                <div class="items-info">
                  <h5>$2589.00 <span>$2689.00</span> </h5>
                  <span class="free-ship">FREE SHIPPING</span>
                  <div class="clearfix"></div>
                  <a href="#." class="btn">SHOP NOW</a> </div>
              </div>
            </li>
          </ul>
          
          <!--======= PAGINATION =========-->
          <ul class="pagination">
            <li><a href="#."><i class="fa fa-angle-double-left"></i></a></li>
            <li><a href="#.">1</a></li>
            <li><a href="#.">2</a></li>
            <li><a href="#.">3</a></li>
            <li><a href="#."><i class="fa fa-angle-double-right"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  @endsection