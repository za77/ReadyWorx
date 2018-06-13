@extends('layout.app')
@section('content')
    
        <div id="page_content_inner">

            <h3 class="heading_a uk-margin-bottom">Sort products by name:</h3>

            <ul id="products_sort" class="uk-subnav uk-subnav-pill">
                <li data-uk-sort="product-name:asc"><a href="#">Ascending</a></li>
                <li data-uk-sort="product-name:desc"><a href="#">Descending</a></li>
            </ul>

            <div class="uk-grid-width-small-1-2 uk-grid-width-medium-1-3 uk-grid-width-large-1-4 hierarchical_show" data-uk-grid="{gutter: 20, controls: '#products_sort'}">
                <div data-product-name="Rerum temporibus illo.">
                    <div class="md-card md-card-hover-img">
                        <div class="md-card-head uk-text-center uk-position-relative">
                            <div class="uk-badge uk-badge-danger uk-position-absolute uk-position-top-left uk-margin-left uk-margin-top">$ 537.00</div>
                            <img class="md-card-head-img" src="assets/img/ecommerce/s6_edge_2.jpg" alt=""/>
                        </div>
                        <div class="md-card-content">
                            <h4 class="heading_c uk-margin-bottom">
                                Rerum temporibus illo.
                                <span class="sub-heading">SKU: 173955</span>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquid autem cupiditate harum illum&hellip;</p>
                            <a class="md-btn md-btn-small" href="ecommerce_product_details.html">More</a>
                        </div>
                    </div>
                </div>
                <div data-product-name="Cupiditate rem aut.">
                    <div class="md-card md-card-hover-img">
                        <div class="md-card-head uk-text-center uk-position-relative">
                            <div class="uk-badge uk-badge-danger uk-position-absolute uk-position-top-left uk-margin-left uk-margin-top">$ 473.00</div>
                            <img class="md-card-head-img" src="assets/img/ecommerce/s6_edge.jpg" alt=""/>
                        </div>
                        <div class="md-card-content">
                            <h4 class="heading_c uk-margin-bottom">
                                Cupiditate rem aut.
                                <span class="sub-heading">SKU: 180125</span>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquid autem cupiditate harum illum&hellip;</p>
                            <a class="md-btn md-btn-small" href="ecommerce_product_details.html">More</a>
                        </div>
                    </div>
                </div>
                <div data-product-name="Labore illum.">
                    <div class="md-card md-card-hover-img">
                        <div class="md-card-head uk-text-center uk-position-relative">
                            <div class="uk-badge uk-badge-danger uk-position-absolute uk-position-top-left uk-margin-left uk-margin-top">$ 585.00</div>
                            <img class="md-card-head-img" src="assets/img/ecommerce/s6_edge_1.jpg" alt=""/>
                        </div>
                        <div class="md-card-content">
                            <h4 class="heading_c uk-margin-bottom">
                                Labore illum.
                                <span class="sub-heading">SKU: 106938</span>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquid autem cupiditate harum illum&hellip;</p>
                            <a class="md-btn md-btn-small" href="ecommerce_product_details.html">More</a>
                        </div>
                    </div>
                </div>
                <div data-product-name="Quia amet vero.">
                    <div class="md-card md-card-hover-img">
                        <div class="md-card-head uk-text-center uk-position-relative">
                            <div class="uk-badge uk-badge-danger uk-position-absolute uk-position-top-left uk-margin-left uk-margin-top">$ 550.00</div>
                            <img class="md-card-head-img" src="assets/img/ecommerce/s6_edge_3.jpg" alt=""/>
                        </div>
                        <div class="md-card-content">
                            <h4 class="heading_c uk-margin-bottom">
                                Quia amet vero.
                                <span class="sub-heading">SKU: 196670</span>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquid autem cupiditate harum illum&hellip;</p>
                            <a class="md-btn md-btn-small" href="ecommerce_product_details.html">More</a>
                        </div>
                    </div>
                </div>
                <div data-product-name="Et beatae id.">
                    <div class="md-card md-card-hover-img">
                        <div class="md-card-head uk-text-center uk-position-relative">
                            <div class="uk-badge uk-badge-danger uk-position-absolute uk-position-top-left uk-margin-left uk-margin-top">$ 564.00</div>
                            <img class="md-card-head-img" src="assets/img/ecommerce/s6_edge_3.jpg" alt=""/>
                        </div>
                        <div class="md-card-content">
                            <h4 class="heading_c uk-margin-bottom">
                                Et beatae id.
                                <span class="sub-heading">SKU: 163466</span>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquid autem cupiditate harum illum&hellip;</p>
                            <a class="md-btn md-btn-small" href="ecommerce_product_details.html">More</a>
                        </div>
                    </div>
                </div>
                <div data-product-name="Ea saepe enim.">
                    <div class="md-card md-card-hover-img">
                        <div class="md-card-head uk-text-center uk-position-relative">
                            <div class="uk-badge uk-badge-danger uk-position-absolute uk-position-top-left uk-margin-left uk-margin-top">$ 531.00</div>
                            <img class="md-card-head-img" src="assets/img/ecommerce/s6_edge_3.jpg" alt=""/>
                        </div>
                        <div class="md-card-content">
                            <h4 class="heading_c uk-margin-bottom">
                                Ea saepe enim.
                                <span class="sub-heading">SKU: 126265</span>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquid autem cupiditate harum illum&hellip;</p>
                            <a class="md-btn md-btn-small" href="ecommerce_product_details.html">More</a>
                        </div>
                    </div>
                </div>
                <div data-product-name="Ipsum sed.">
                    <div class="md-card md-card-hover-img">
                        <div class="md-card-head uk-text-center uk-position-relative">
                            <div class="uk-badge uk-badge-danger uk-position-absolute uk-position-top-left uk-margin-left uk-margin-top">$ 530.00</div>
                            <img class="md-card-head-img" src="assets/img/ecommerce/s6_edge.jpg" alt=""/>
                        </div>
                        <div class="md-card-content">
                            <h4 class="heading_c uk-margin-bottom">
                                Ipsum sed.
                                <span class="sub-heading">SKU: 143718</span>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquid autem cupiditate harum illum&hellip;</p>
                            <a class="md-btn md-btn-small" href="ecommerce_product_details.html">More</a>
                        </div>
                    </div>
                </div>
                <div data-product-name="Et omnis qui.">
                    <div class="md-card md-card-hover-img">
                        <div class="md-card-head uk-text-center uk-position-relative">
                            <div class="uk-badge uk-badge-danger uk-position-absolute uk-position-top-left uk-margin-left uk-margin-top">$ 475.00</div>
                            <img class="md-card-head-img" src="assets/img/ecommerce/s6_edge_2.jpg" alt=""/>
                        </div>
                        <div class="md-card-content">
                            <h4 class="heading_c uk-margin-bottom">
                                Et omnis qui.
                                <span class="sub-heading">SKU: 124335</span>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquid autem cupiditate harum illum&hellip;</p>
                            <a class="md-btn md-btn-small" href="ecommerce_product_details.html">More</a>
                        </div>
                    </div>
                </div>
                <div data-product-name="Quo ab.">
                    <div class="md-card md-card-hover-img">
                        <div class="md-card-head uk-text-center uk-position-relative">
                            <div class="uk-badge uk-badge-danger uk-position-absolute uk-position-top-left uk-margin-left uk-margin-top">$ 566.00</div>
                            <img class="md-card-head-img" src="assets/img/ecommerce/s6_edge.jpg" alt=""/>
                        </div>
                        <div class="md-card-content">
                            <h4 class="heading_c uk-margin-bottom">
                                Quo ab.
                                <span class="sub-heading">SKU: 144799</span>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquid autem cupiditate harum illum&hellip;</p>
                            <a class="md-btn md-btn-small" href="ecommerce_product_details.html">More</a>
                        </div>
                    </div>
                </div>
                <div data-product-name="Esse doloribus.">
                    <div class="md-card md-card-hover-img">
                        <div class="md-card-head uk-text-center uk-position-relative">
                            <div class="uk-badge uk-badge-danger uk-position-absolute uk-position-top-left uk-margin-left uk-margin-top">$ 560.00</div>
                            <img class="md-card-head-img" src="assets/img/ecommerce/s6_edge.jpg" alt=""/>
                        </div>
                        <div class="md-card-content">
                            <h4 class="heading_c uk-margin-bottom">
                                Esse doloribus.
                                <span class="sub-heading">SKU: 126108</span>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquid autem cupiditate harum illum&hellip;</p>
                            <a class="md-btn md-btn-small" href="ecommerce_product_details.html">More</a>
                        </div>
                    </div>
                </div>
                <div data-product-name="Veritatis dicta dignissimos.">
                    <div class="md-card md-card-hover-img">
                        <div class="md-card-head uk-text-center uk-position-relative">
                            <div class="uk-badge uk-badge-danger uk-position-absolute uk-position-top-left uk-margin-left uk-margin-top">$ 521.00</div>
                            <img class="md-card-head-img" src="assets/img/ecommerce/s6_edge.jpg" alt=""/>
                        </div>
                        <div class="md-card-content">
                            <h4 class="heading_c uk-margin-bottom">
                                Veritatis dicta dignissimos.
                                <span class="sub-heading">SKU: 184293</span>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquid autem cupiditate harum illum&hellip;</p>
                            <a class="md-btn md-btn-small" href="ecommerce_product_details.html">More</a>
                        </div>
                    </div>
                </div>
                <div data-product-name="Quaerat sunt.">
                    <div class="md-card md-card-hover-img">
                        <div class="md-card-head uk-text-center uk-position-relative">
                            <div class="uk-badge uk-badge-danger uk-position-absolute uk-position-top-left uk-margin-left uk-margin-top">$ 554.00</div>
                            <img class="md-card-head-img" src="assets/img/ecommerce/s6_edge_3.jpg" alt=""/>
                        </div>
                        <div class="md-card-content">
                            <h4 class="heading_c uk-margin-bottom">
                                Quaerat sunt.
                                <span class="sub-heading">SKU: 199980</span>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquid autem cupiditate harum illum&hellip;</p>
                            <a class="md-btn md-btn-small" href="ecommerce_product_details.html">More</a>
                        </div>
                    </div>
                </div>
                <div data-product-name="Sint repellat quis.">
                    <div class="md-card md-card-hover-img">
                        <div class="md-card-head uk-text-center uk-position-relative">
                            <div class="uk-badge uk-badge-danger uk-position-absolute uk-position-top-left uk-margin-left uk-margin-top">$ 477.00</div>
                            <img class="md-card-head-img" src="assets/img/ecommerce/s6_edge_3.jpg" alt=""/>
                        </div>
                        <div class="md-card-content">
                            <h4 class="heading_c uk-margin-bottom">
                                Sint repellat quis.
                                <span class="sub-heading">SKU: 189907</span>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquid autem cupiditate harum illum&hellip;</p>
                            <a class="md-btn md-btn-small" href="ecommerce_product_details.html">More</a>
                        </div>
                    </div>
                </div>
                <div data-product-name="Quia minima.">
                    <div class="md-card md-card-hover-img">
                        <div class="md-card-head uk-text-center uk-position-relative">
                            <div class="uk-badge uk-badge-danger uk-position-absolute uk-position-top-left uk-margin-left uk-margin-top">$ 464.00</div>
                            <img class="md-card-head-img" src="assets/img/ecommerce/s6_edge_3.jpg" alt=""/>
                        </div>
                        <div class="md-card-content">
                            <h4 class="heading_c uk-margin-bottom">
                                Quia minima.
                                <span class="sub-heading">SKU: 156540</span>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquid autem cupiditate harum illum&hellip;</p>
                            <a class="md-btn md-btn-small" href="ecommerce_product_details.html">More</a>
                        </div>
                    </div>
                </div>
                <div data-product-name="Fuga velit.">
                    <div class="md-card md-card-hover-img">
                        <div class="md-card-head uk-text-center uk-position-relative">
                            <div class="uk-badge uk-badge-danger uk-position-absolute uk-position-top-left uk-margin-left uk-margin-top">$ 600.00</div>
                            <img class="md-card-head-img" src="assets/img/ecommerce/s6_edge_3.jpg" alt=""/>
                        </div>
                        <div class="md-card-content">
                            <h4 class="heading_c uk-margin-bottom">
                                Fuga velit.
                                <span class="sub-heading">SKU: 132398</span>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquid autem cupiditate harum illum&hellip;</p>
                            <a class="md-btn md-btn-small" href="ecommerce_product_details.html">More</a>
                        </div>
                    </div>
                </div>
                <div data-product-name="Ut explicabo ea.">
                    <div class="md-card md-card-hover-img">
                        <div class="md-card-head uk-text-center uk-position-relative">
                            <div class="uk-badge uk-badge-danger uk-position-absolute uk-position-top-left uk-margin-left uk-margin-top">$ 573.00</div>
                            <img class="md-card-head-img" src="assets/img/ecommerce/s6_edge_1.jpg" alt=""/>
                        </div>
                        <div class="md-card-content">
                            <h4 class="heading_c uk-margin-bottom">
                                Ut explicabo ea.
                                <span class="sub-heading">SKU: 186679</span>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquid autem cupiditate harum illum&hellip;</p>
                            <a class="md-btn md-btn-small" href="ecommerce_product_details.html">More</a>
                        </div>
                    </div>
                </div>
                <div data-product-name="Atque accusantium est.">
                    <div class="md-card md-card-hover-img">
                        <div class="md-card-head uk-text-center uk-position-relative">
                            <div class="uk-badge uk-badge-danger uk-position-absolute uk-position-top-left uk-margin-left uk-margin-top">$ 600.00</div>
                            <img class="md-card-head-img" src="assets/img/ecommerce/s6_edge_2.jpg" alt=""/>
                        </div>
                        <div class="md-card-content">
                            <h4 class="heading_c uk-margin-bottom">
                                Atque accusantium est.
                                <span class="sub-heading">SKU: 140008</span>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquid autem cupiditate harum illum&hellip;</p>
                            <a class="md-btn md-btn-small" href="ecommerce_product_details.html">More</a>
                        </div>
                    </div>
                </div>
                <div data-product-name="Pariatur architecto dolores.">
                    <div class="md-card md-card-hover-img">
                        <div class="md-card-head uk-text-center uk-position-relative">
                            <div class="uk-badge uk-badge-danger uk-position-absolute uk-position-top-left uk-margin-left uk-margin-top">$ 526.00</div>
                            <img class="md-card-head-img" src="assets/img/ecommerce/s6_edge.jpg" alt=""/>
                        </div>
                        <div class="md-card-content">
                            <h4 class="heading_c uk-margin-bottom">
                                Pariatur architecto dolores.
                                <span class="sub-heading">SKU: 157170</span>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquid autem cupiditate harum illum&hellip;</p>
                            <a class="md-btn md-btn-small" href="ecommerce_product_details.html">More</a>
                        </div>
                    </div>
                </div>
                <div data-product-name="Quia ut quam.">
                    <div class="md-card md-card-hover-img">
                        <div class="md-card-head uk-text-center uk-position-relative">
                            <div class="uk-badge uk-badge-danger uk-position-absolute uk-position-top-left uk-margin-left uk-margin-top">$ 552.00</div>
                            <img class="md-card-head-img" src="assets/img/ecommerce/s6_edge_1.jpg" alt=""/>
                        </div>
                        <div class="md-card-content">
                            <h4 class="heading_c uk-margin-bottom">
                                Quia ut quam.
                                <span class="sub-heading">SKU: 134300</span>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquid autem cupiditate harum illum&hellip;</p>
                            <a class="md-btn md-btn-small" href="ecommerce_product_details.html">More</a>
                        </div>
                    </div>
                </div>
                <div data-product-name="Ut porro iusto.">
                    <div class="md-card md-card-hover-img">
                        <div class="md-card-head uk-text-center uk-position-relative">
                            <div class="uk-badge uk-badge-danger uk-position-absolute uk-position-top-left uk-margin-left uk-margin-top">$ 570.00</div>
                            <img class="md-card-head-img" src="assets/img/ecommerce/s6_edge_3.jpg" alt=""/>
                        </div>
                        <div class="md-card-content">
                            <h4 class="heading_c uk-margin-bottom">
                                Ut porro iusto.
                                <span class="sub-heading">SKU: 107627</span>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquid autem cupiditate harum illum&hellip;</p>
                            <a class="md-btn md-btn-small" href="ecommerce_product_details.html">More</a>
                        </div>
                    </div>
                </div>
                <div data-product-name="Voluptatem et.">
                    <div class="md-card md-card-hover-img">
                        <div class="md-card-head uk-text-center uk-position-relative">
                            <div class="uk-badge uk-badge-danger uk-position-absolute uk-position-top-left uk-margin-left uk-margin-top">$ 455.00</div>
                            <img class="md-card-head-img" src="assets/img/ecommerce/s6_edge.jpg" alt=""/>
                        </div>
                        <div class="md-card-content">
                            <h4 class="heading_c uk-margin-bottom">
                                Voluptatem et.
                                <span class="sub-heading">SKU: 155268</span>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquid autem cupiditate harum illum&hellip;</p>
                            <a class="md-btn md-btn-small" href="ecommerce_product_details.html">More</a>
                        </div>
                    </div>
                </div>
                <div data-product-name="Unde et.">
                    <div class="md-card md-card-hover-img">
                        <div class="md-card-head uk-text-center uk-position-relative">
                            <div class="uk-badge uk-badge-danger uk-position-absolute uk-position-top-left uk-margin-left uk-margin-top">$ 451.00</div>
                            <img class="md-card-head-img" src="assets/img/ecommerce/s6_edge_3.jpg" alt=""/>
                        </div>
                        <div class="md-card-content">
                            <h4 class="heading_c uk-margin-bottom">
                                Unde et.
                                <span class="sub-heading">SKU: 124764</span>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquid autem cupiditate harum illum&hellip;</p>
                            <a class="md-btn md-btn-small" href="ecommerce_product_details.html">More</a>
                        </div>
                    </div>
                </div>
                <div data-product-name="Atque sit.">
                    <div class="md-card md-card-hover-img">
                        <div class="md-card-head uk-text-center uk-position-relative">
                            <div class="uk-badge uk-badge-danger uk-position-absolute uk-position-top-left uk-margin-left uk-margin-top">$ 568.00</div>
                            <img class="md-card-head-img" src="assets/img/ecommerce/s6_edge_3.jpg" alt=""/>
                        </div>
                        <div class="md-card-content">
                            <h4 class="heading_c uk-margin-bottom">
                                Atque sit.
                                <span class="sub-heading">SKU: 143089</span>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquid autem cupiditate harum illum&hellip;</p>
                            <a class="md-btn md-btn-small" href="ecommerce_product_details.html">More</a>
                        </div>
                    </div>
                </div>
                <div data-product-name="Nostrum excepturi eos.">
                    <div class="md-card md-card-hover-img">
                        <div class="md-card-head uk-text-center uk-position-relative">
                            <div class="uk-badge uk-badge-danger uk-position-absolute uk-position-top-left uk-margin-left uk-margin-top">$ 545.00</div>
                            <img class="md-card-head-img" src="assets/img/ecommerce/s6_edge_3.jpg" alt=""/>
                        </div>
                        <div class="md-card-content">
                            <h4 class="heading_c uk-margin-bottom">
                                Nostrum excepturi eos.
                                <span class="sub-heading">SKU: 152585</span>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquid autem cupiditate harum illum&hellip;</p>
                            <a class="md-btn md-btn-small" href="ecommerce_product_details.html">More</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
  <div class="md-fab-wrapper">
        <a class="md-fab md-fab-accent md-fab-wave" href="{{url('admin/events/create')}}"><i class="material-icons">+</i>
        </a>
    </div>
        </a>
    </div>
@endsection
    <!-- secondary sidebar -->

    <!-- secondary sidebar end -->

   