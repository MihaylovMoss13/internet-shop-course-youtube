<!doctype html>
<html lang="ru">
    <head>
        <!-- Document Meta
          ============================================= -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!--IE Compatibility Meta-->
        <meta name="author" content="zytheme" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="Multi-purpose Business html5 template">
        <link href="{{ asset('assets/images/favicon/favicon.png') }}" rel="icon">
    
        <link
          href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i%7CMontserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i%7CPlayfair+Display:400,400i"
          rel="stylesheet">
      
        <!-- Stylesheets
          ============================================= -->
        <link href="{{ asset('assets/css/external.css') }}" rel="stylesheet">
        <!-- RS5.0 Main Stylesheet -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/revolution/css/settings.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/revolution/css/layers.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/revolution/css/navigation.css') }}">
      
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
      
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
        <!--[if lt IE 9]>
            <script src="{{ asset('assets/js/html5shiv.js') }}"></script>
            <script src="{{ asset('assets/js/respond.min.js') }}"></script>
          <![endif]-->
      
        <!-- Document Title
          ============================================= -->
        <title>@lang('main.online_shop'): @yield('title')</title>
      </head>
{{-- <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@lang('main.online_shop'): @yield('title')</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/starter-template.css" rel="stylesheet">
</head> --}}
<body>
    <div class="preloader">
      <div class="loader-eclipse">
        <div class="loader-content"></div>
      </div>
    </div>
    <!-- Document Wrapper -->
  <div id="wrapperParallax" class="wrapper clearfix">
    <header id="navbar-spy" class="header header-1 ">
      <nav id="primary-menu" class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <a class="navbar-brand" href="index-2.html">
            <img class="logo" src="{{ asset('assets/images/logo/logo-dark.png') }}" alt="logo">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent"
            aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav">
              <!-- home Menu -->
              <li @routeactive('index')>
                <a href="{{ route('index') }}" class="dropdown-toggle menu-item">@lang('main.home')</a>
              </li><!-- li end -->

              <li @routeactive('categor*')><a href="{{ route('categories') }}">@lang('main.categories')</a>
              </li>

              <!-- collection Menu -->
              <li class="has-dropdown mega-dropdown" @routeactive('categor*')>
                <a href="{{ route('categories') }}" data-toggle="dropdown" class="dropdown-toggle menu-item">Каталог</a>
                <ul class="dropdown-menu mega-dropdown-menu collections-menu">
                  <li>
                    <div class="container">
                      <div class="row">
                        <!-- Column #1 -->
                        @foreach($categories as $category)
                        <div class="col-md-12 col-lg-5ths">
                          <div class="collection--menu-content">
                            <h5>{{ $category->__('name') }}</h5>
                            <a class="text-left" href="{{ route('category', $category->code) }}">Перейти в категорию</a>
                            <ul>
                              <li>
                                <a href="">Деревянные столы</a>
                              </li>
                              <li>
                                <a href="shop-layout-sidebar-left.html">Деревянные
                                  стулья</a>
                              </li>
                              <li>
                                <a href="shop-4columns.html">Журнальные столики</a>
                              </li>
                              <li>
                                <a href="#">Кабинет руководителя</a>
                              </li>
                              <li>
                                <a href="#">Мебель в гостиницу</a>
                              </li>
                              <li>
                                <a href="#">Мебель в кафе, бар, ресторан</a>
                              </li>
                              <li>
                                <a href="#">Мебель для ванной</a>
                              </li>
                              <li>
                                <a href="#">Мебель для комнаты</a>
                              </li>
                              <li>
                                <a href="#">Нестандартная мебель</a>
                              </li>
                              <li>
                                <a href="#">Офисная мебель</a>
                              </li>
                              <li>
                                <a href="#">Стеновые панели</a>
                              </li>
                              <li>
                                <a href="#">Стол обеденный овальный</a>
                              </li>
                              <li>
                                <a href="#">Шкафы из массива</a>
                              </li>
                              <li>
                                <a href="#">Элитные интерьеры</a>
                              </li>
                            </ul>
                          </div>
                          <div class="menu--img">
                          <img src="{{ Storage::url($category->image) }}" alt="{{ $category->__('name') }}" class="img-fluid">
                          </div>
                        </div>
                        @endforeach
                        <!-- .col-lg-5ths end -->
                      </div>
                      <!-- .row end -->
                    </div>
                    <!-- container end -->
                  </li>
                </ul>
                <!-- .mega-dropdown-menu end -->
              </li><!-- li end -->

              <!-- Pages Menu -->
              <li class="has-dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle link-hover" data-hover="pages">page</a>
                <ul class="dropdown-menu">
                  <li class="dropdown-submenu">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">about us</a>
                    <ul class="dropdown-menu">
                      <li>
                        <a href="page-about-1.html">About US 1</a>
                      </li>
                      <li>
                        <a href="page-about-2.html">About US 2</a>
                      </li>
                      <li>
                        <a href="page-about-dark.html">About US dark</a>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">contact us</a>
                    <ul class="dropdown-menu">
                      <li>
                        <a href="page-contact-1.html">page contact 1</a>
                      </li>
                      <li>
                        <a href="page-contact-2.html">page contact 2</a>
                      </li>
                      <li>
                        <a href="page-contact-dark.html">page contact dark</a>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">untility pages</a>
                    <ul class="dropdown-menu">
                      <li>
                        <a href="page-404.html">page 404</a>
                      </li>
                      <li>
                        <a href="page-404-dark.html">page 404 dark</a>
                      </li>
                      <li>
                        <a href="page-privacy.html">page privacy</a>
                      </li>
                      <li>
                        <a href="page-terms.html">page terms</a>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">page tempalates</a>
                    <ul class="dropdown-menu">
                      <li>
                        <a href="page-template-fullwidth.html">fullwidth</a>
                      </li>
                      <li>
                        <a href="page-template-right-sidebar.html">right sidebar</a>
                      </li>
                      <li>
                        <a href="page-template-left-sidebar.html">left sidebar</a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li><!-- li end -->

              <!-- Blog Menu-->
              <li class="has-dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle menu-item">Blog</a>
                <ul class="dropdown-menu">
                  <li class="dropdown-submenu">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">blog Grid</a>
                    <ul class="dropdown-menu">
                      <li>
                        <a href="blog-grid.html">fullwidth</a>
                      </li>
                      <li>
                        <a href="blog-grid-sidebar-right.html">right sidebar</a>
                      </li>
                      <li>
                        <a href="blog-grid-sidebar-left.html">left sidebar</a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a href="blog-masonry.html">blog masonry</a>
                  </li>
                  <li>
                    <a href="blog-parallax.html">blog parallax</a>
                  </li>
                  <li class="dropdown-submenu">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">blog single</a>
                    <ul class="dropdown-menu">
                      <li>
                        <a href="blog-single.html">fullwidth</a>
                      </li>
                      <li>
                        <a href="blog-single-sidebar-right.html">right sidebar</a>
                      </li>
                      <li>
                        <a href="blog-single-sidebar-left.html">left sidebar</a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li><!-- li end -->

              <!-- features Menu -->
              <li class="has-dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle link-hover" data-hover="pages">features</a>
                <ul class="dropdown-menu">
                  <li class="dropdown-submenu">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">Headers</a>
                    <ul class="dropdown-menu">
                      <li>
                        <a href="header-1.html">Header 1</a>
                      </li>
                      <li>
                        <a href="header-2.html">Header 2</a>
                      </li>
                      <li>
                        <a href="header-3.html">Header 3</a>
                      </li>
                      <li>
                        <a href="header-4.html">Header 4</a>
                      </li>
                      <li>
                        <a href="header-5.html">Header 5</a>
                      </li>
                      <li>
                        <a href="header-6.html">Header 6</a>
                      </li>
                      <li>
                        <a href="header-7.html">Header 7</a>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">footers</a>
                    <ul class="dropdown-menu">
                      <li>
                        <a href="footer-1.html">footer 1</a>
                      </li>
                      <li>
                        <a href="footer-2.html">footer 2</a>
                      </li>
                      <li>
                        <a href="footer-3.html">footer 3</a>
                      </li>
                      <li>
                        <a href="footer-4.html">footer 4</a>
                      </li>
                      <li>
                        <a href="footer-5.html">footer 5</a>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">sliders</a>
                    <ul class="dropdown-menu">
                      <li>
                        <a href="slider-1.html">slider 1</a>
                      </li>
                      <li>
                        <a href="slider-2.html">slider 2</a>
                      </li>
                      <li>
                        <a href="slider-3.html">slider 3</a>
                      </li>
                      <li>
                        <a href="slider-4.html">slider 4</a>
                      </li>
                      <li>
                        <a href="slider-5.html">slider 5</a>
                      </li>
                      <li>
                        <a href="slider-6.html">slider 6</a>
                      </li>
                      <li>
                        <a href="slider-7.html">slider 7</a>
                      </li>
                      <li>
                        <a href="slider-8.html">slider 8</a>
                      </li>
                      <li>
                        <a href="slider-9.html">slider 9</a>
                      </li>
                      <li>
                        <a href="slider-10.html">slider 10</a>
                      </li>
                      <li>
                        <a href="slider-11.html">slider 11</a>
                      </li>
                      <li>
                        <a href="slider-12.html">slider 12</a>
                      </li>
                      <li>
                        <a href="slider-13.html">slider 13</a>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">cart</a>
                    <ul class="dropdown-menu">
                      <li>
                        <a href="page-cart.html">page cart</a>
                      </li>
                      <li>
                        <a href="page-cart-dark.html">page cart dark</a>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">checkout</a>
                    <ul class="dropdown-menu">
                      <li>
                        <a href="page-checkout.html">page checkout</a>
                      </li>
                      <li>
                        <a href="page-checkout-dark.html">checkout dark</a>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">login</a>
                    <ul class="dropdown-menu">
                      <li>
                        <a href="page-login.html">page login</a>
                      </li>
                      <li>
                        <a href="page-login-dark.html">page login dark</a>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">wishlist</a>
                    <ul class="dropdown-menu">
                      <li>
                        <a href="page-wishlist.html">page wishlist</a>
                      </li>
                      <li>
                        <a href="page-wishlist-dark.html">page wishlist dark</a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a href="page-soon.html">page soon</a>
                  </li>
                  <li>
                    <a href="page-popup.html">page popup</a>
                  </li>
                </ul>
              </li><!-- li end -->
            </ul>
            <div class="d-flex justify-content-end w-100 align-items-center">
              <div id="contact4" class="contact-4 mr-4">
                <div class="info--panel">
                  <i class="fa fa-phone"></i>
                  <a href="tel:03433455634">(034) 334 55634</a>
                </div>
              </div>
              <div class="module-container">
                <!-- Module Search -->
                <div class="module module-search pull-left">
                  <div class="module-icon search-icon">
                    <i class="lnr lnr-magnifier"></i>
                    <span class="title">Search</span>
                  </div>
                  <div class="module-content module--search-box">
                    <form class="form-search">
                      <input type="text" class="form-control" placeholder="Search anything">
                      <button type="submit"><span class="fa fa-arrow-right"></span></button>
                    </form><!-- .form-search end -->
                  </div>
                </div><!-- .module-search end -->
                <div class="vertical-divider pull-left mr-4"></div>
                <div class="module module-lang  module-dropdown module-dropdown-right pull-left">
                  <div class="module-icon">
                    <button type="button" class="dropdown-toggle" data-toggle="dropdown">
                      @lang('main.set_lang') <i class="fa fa-caret-down"></i>
                    </button>
                  </div>
                  <div class="module-dropdown-menu module-content">
                    <a href="{{ route('locale', __('main.set_lang')) }}">@lang('main.set_lang')</a>
                    <a class="dropdown-item" href="#">RU</a>
                    <a class="dropdown-item" href="#">FR</a>
                    <a class="dropdown-item" href="#">AR</a>
                  </div>
                </div>
                <div class="module module-dropdown module-currency module-dropdown-right pull-left">
                  <div class="module-icon dropdown">
                    <button type="button" class="dropdown-toggle" data-toggle="dropdown">
                      USD <i class="fa fa-caret-down"></i>
                    </button>
                  </div>
                  <div class="module-dropdown-menu module-content">
                    <a class="dropdown-item" href="#">EUR</a>
                    <a class="dropdown-item" href="#">CAD</a>
                    <a class="dropdown-item" href="#">pound</a>
                  </div>
                </div> <!-- Module Cart -->
                <div class="module module-cart pull-left">
                  <div class="module-icon cart-icon">
                    <i class="icon-bag"></i>
                    <span class="title">shop cart</span>
                    <label class="module-label">2</label>
                  </div>
                  <div class="module-content module-box cart-box">
                    <div class="cart-overview">
                      <ul class="list-unstyled">
                        <li>
                          <img class="img-fluid" src="{{ asset('assets/images/products/thumb/1.jpg') }}" alt="product" />
                          <div class="product-meta">
                            <h5 class="product-title">Hebes Great Chair</h5>
                            <p class="product-qunt">Quantity: 01</p>
                            <p class="product-price">$24.00</p>
                          </div>
                          <a class="cart-cancel" href="#"><i class="lnr lnr-cross"></i></a>
                        </li>
                        <li>
                          <img class="img-fluid" src="{{ asset('assets/images/products/thumb/2.jpg') }}" alt="product" />
                          <div class="product-meta">
                            <h5 class="product-title">Hebes Great Chair</h5>
                            <p class="product-qunt">Quantity: 01</p>
                            <p class="product-price">$24.00</p>
                          </div>
                          <a class="cart-cancel" href="#"><i class="lnr lnr-cross"></i></a>
                        </li>
                      </ul>
                    </div>
                    <div class="cart-total">
                      <div class="total-desc">
                        Sub total
                      </div>
                      <div class="total-price">
                        $48.00
                      </div>
                    </div>
                    <div class="clearfix">
                    </div>
                    <div class="cart--control">
                      <a class="btn btn--white btn--bordered btn--rounded" href="{{ route('basket') }}">@lang('main.cart') </a>
                      <a class="btn btn--primary btn--rounded" href="#">Checkout</a>
                    </div>
                  </div>
                </div>
                <!-- .module-cart end -->
              </div>
            </div>
          </div>
          <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
      </nav>
    </header>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ $currencySymbol }}<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        @foreach ($currencies as $currency)
                            <li><a href="{{ route('currency', $currency->code) }}">{{ $currency->symbol }}</a></li>
                        @endforeach
                    </ul>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                @guest
                    <li><a href="{{ route('login') }}">@lang('main.login')</a></li>
                @endguest

                @auth
                    @admin
                    <li><a href="{{ route('home') }}">@lang('main.admin_panel')</a></li>
                    <li><a href="{{ route('reset') }}">@lang('main.reset_project')</a></li>
                    @else
                    <li><a href="{{ route('person.orders.index') }}">@lang('main.my_orders')</a></li>
                    @endadmin
                    <li><a href="{{ route('get-logout') }}">@lang('main.logout')</a></li>
                @endauth
            </ul>
        </div>
    </div>
</nav>

@if(session()->has('success'))
    <p class="alert alert-success">{{ session()->get('success') }}</p>
@endif
@if(session()->has('warning'))
    <p class="alert alert-warning">{{ session()->get('warning') }}</p>
@endif
@yield('content')

<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-6"><p>Категории товаров</p>
                <ul>
                    @foreach($categories as $category)
                        <li><a href="{{ route('category', $category->code) }}">{{ $category->__('name') }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-lg-6"><p>Самые популярные товары</p>
                <ul>
                    @foreach ($bestSkus as $bestSku)
                        <li><a href="{{ route('sku',
                [$bestSku->product->category->code, $bestSku->product->code, $bestSku]) }}">
                                {{ $bestSku->product->__('name') }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</footer>

<div class="modal fade search-popup modal-fullscreen" id="search-popup" tabindex="-1" role="dialog">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
        aria-hidden="true">&times;</span></button>
    <div class="pos-vertical-center">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <div class="heading mb-90">
              <h2 class="heading--title">Search</h2>
            </div>
            <form class="form-inline form-search">
              <div class="form-group">
                <div class="select--box">
                  <i class="fa fa-caret-down"></i>
                  <select name="select-cat" id="select-cat" class="form-control">
                    <option>All Categotries</option>
                    <option>Chairs</option>
                    <option>Tables</option>
                    <option>Sofas</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Search here">
                <button type="button"><i class="lnr lnr-arrow-right"></i></button>
              </div>
            </form>
            <!-- .form-search end -->
            <p>TOP KEYWORDS: Chair, Table, Sofas, Lamps</p>
          </div>
        </div>
      </div>
      <!-- .modal-content end -->
    </div>
  </div>
  <!-- .modal end -->
  <div class="modal model-bg-light fade product-popup modal-fullscreen" id="product-popup" tabindex="-1"
    role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
              aria-hidden="true">&times;</span></button>
          <div class="product-detalis product-detalis-3 product-detalis-10 pt-0 pb-0">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="products-gallery-carousel products-gallery-carousel-2">
                  <div class="owl-carousel products-slider" data-slider-id="1">
                    <div class="product-img">
                      <img src="{{ asset('assets/images/products/gallery/23.jpg') }}" alt="product">
                    </div>
                    <div class="product-img">
                      <img src="{{ asset('assets/images/products/gallery/24.jpg') }}" alt="product">
                    </div>
                    <div class="product-img">
                      <img src="{{ asset('assets/images/products/gallery/25.jpg') }}" alt="product">
                    </div>
                    <div class="product-img">
                      <img src="{{ asset('assets/images/products/gallery/24.jpg') }}" alt="product">
                    </div>
                  </div>
                  <div class="owl-thumbs thumbs-bg" data-slider-id="1">
                    <button class="owl-thumb-item">
                      <img src="{{ asset('assets/images/products/gallery/thumb/17.png') }}" alt="product thumb">
                    </button>
                    <button class="owl-thumb-item">
                      <img src="{{ asset('assets/images/products/gallery/thumb/18.png') }}" alt="product thumb">
                    </button>
                    <button class="owl-thumb-item">
                      <img src="{{ asset('assets/images/products/gallery/thumb/19.png') }}" alt="product thumb">
                    </button>
                    <button class="owl-thumb-item">
                      <img src="{{ asset('assets/images/products/gallery/thumb/20.png') }}" alt="product thumb">
                    </button>
                  </div>
                  <!-- .owl-thumbs end -->
                </div>
                <!-- .products-gallery-carousel end -->
              </div>
              <!-- .col-lg-7 end -->
              <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="product--title">
                  <h3>Hebes Living Sofa</h3>
                </div>
                <!-- .product-title end -->
                <div class="product--rating">
                  <i class="fa fa-star active"></i>
                  <i class="fa fa-star active"></i>
                  <i class="fa fa-star active"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
                <div class="product--review">03 Customer Review</div>
                <!--- .product-review end -->
                <div class="product--price">$ 42.00</div>
                <!-- .product-price end -->
                <div class="product--desc-tabs tabs">
                  <!-- Nav tabs -->
                  <ul class="nav nav-tabs" role="tablist">
                    <li><a href="#popup--desc-tabs-1" role="tab" data-toggle="tab" class="active">INFO GUIDE</a></li>
                    <li><a href="#popup--desc-tabs-2" role="tab" data-toggle="tab">SHIPPING</a>
                    </li>
                    <li><a href="#popup--desc-tabs-3" role="tab" data-toggle="tab">RETURN</a>
                    </li>
                  </ul>

                  <!-- Tab panes -->
                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade show active" id="popup--desc-tabs-1">
                      <div class="product--desc">
                        <p>Sed id interdum urna. Nam ac elit a ante commodo tristique. tum
                          vehicula a hendrerit ac nisi. hendrerit ac</p>
                      </div>
                    </div>
                    <!-- .tab-pane end -->
                    <div role="tabpanel" class="tab-pane fade" id="popup--desc-tabs-2">
                      <div class="product--desc">
                        <p>Sed id interdum urna. Nam ac elit a ante commodo tristique. tum
                          vehicula a hendrerit ac nisi. hendrerit ac</p>
                      </div>
                    </div>
                    <!-- .tab-pane end -->
                    <div role="tabpanel" class="tab-pane fade" id="popup--desc-tabs-3">
                      <div class="product--desc">
                        <p>Sed id interdum urna. Nam ac elit a ante commodo tristique. tum
                          vehicula a hendrerit ac nisi. hendrerit ac</p>
                      </div>
                    </div>
                    <!-- .tab-pane end -->
                  </div>
                  <!-- #tab-content end -->
                </div>
                <!-- .product-desc-tabs end -->
                <div class="product--meta">
                  <ul class="product--meta-info list-unstyled">
                    <li>Availability:<span>In stock</span></li>
                    <li>SKU:<span>S3456</span></li>
                  </ul>
                  <!-- .product-meta-info end -->
                  <div class="product--meta-select3">
                    <form class="mb-30">
                      <div class="row">
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                          <div class="select--box">
                            <i class="fa fa-caret-down"></i>
                            <select class="form-control">
                              <option value="white">WHITE</option>
                              <option value="black">black</option>
                              <option value="red">red</option>
                            </select>
                          </div>
                        </div>
                        <!-- .col-md-6 -->
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                          <div class="select--box">
                            <i class="fa fa-caret-down"></i>
                            <select class="form-control">
                              <option value="small">SMALL</option>
                              <option value="large">large</option>
                              <option value="X large">X large</option>
                            </select>
                          </div>
                        </div>
                        <!-- .col-md-6 -->
                      </div>
                      <!-- .row -->
                    </form>
                  </div>
                  <!-- .product-meta-select end -->
                  <div class="product--meta-action clearfix mb-0">
                    <div class="mb-40">
                      <div class="select-order">
                        <div class="product-quantity">
                          <input class="minus" type="button" value="-">
                          <input type="text" id="pro1-qunt" value="2" class="qty" readonly="">
                          <input class="plus" type="button" value="+">
                        </div>
                      </div>
                      <a href="product-gallery.html" class="btn btn--primary btn--rounded">ADD
                        TO CART</a>
                    </div>
                    <div class="clearfix">
                      <div class="pull-left">
                        <a href="#" class="fav"><i class="ti-heart"></i></a>
                        <a href="#" class="compare" data-toggle="modal" data-target="#compare-popup"><i
                            class="ti-control-shuffle"></i></a>
                      </div>
                      <div class="product--share pull-right">
                        <a class="share-facebook" href="#"><i class="fa fa-facebook"></i></a>
                        <a class="share-twitter" href="#"><i class="fa fa-twitter"></i></a>
                        <a class="share-google-plus" href="#"><i class="fa fa-pinterest-p"></i></a>
                        <a class="share-linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                      </div>
                    </div>
                    <!-- .product-share end -->
                  </div>
                </div>

              </div>
              <!-- .col-lg-6 end -->
            </div>
            <!-- .row end -->

          </div>
          <!-- .modal-body end -->
        </div>
      </div>
      <!-- .modal-content end -->
    </div>
    <!-- .modal-dialog end -->
  </div>
  <!-- .modal end -->
  <div class="modal model-bg-light fade compare-popup modal-fullscreen" id="compare-popup" tabindex="-1"
    role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
              aria-hidden="true">&times;</span></button>
          <div class="heading text-center mb-50">
            <h2 class="heading--title">Compare products</h2>
          </div>
          <div class="table-responsive table-bordered product-detalis-2 product-detalis-4">
            <table class="table">
              <tbody>
                <tr>
                  <th scope="row"></th>
                  <td class="product--info">
                    <div class="product--img">
                      <img src="{{ asset('assets/images/products/gallery/thumb/25.png') }}" alt="">
                    </div>
                    <div class="product--title">
                      <h3>Relaxing chair</h3>
                    </div>
                    <div class="product--price">$ 30.00</div>
                  </td>
                  <td class="product--info">
                    <div class="product--img">
                      <img src="{{ asset('assets/images/products/gallery/thumb/26.png') }}" alt="">
                    </div>
                    <div class="product--title">
                      <h3>Simple chair</h3>
                    </div>
                    <div class="product--price">$ 23.00</div>
                  </td>
                </tr>
                <tr>
                  <th scope="row">Description </th>
                  <td>
                    <div class="product--desc-list">
                      <ul class="list-unstyled mb-0">
                        <li>Our Model wears a UK 8/ EU 36/ Us 4</li>
                        <li>Model is 170/ 5’7” Tall</li>
                        <li>Shoulder seam to hem measures appox 58”/ 147 cm in lenght</li>
                      </ul>
                    </div>
                  </td>
                  <td>
                    <div class="product--desc-list">
                      <ul class="list-unstyled mb-0">
                        <li>Our Model wears a UK 8/ EU 36/ Us 4</li>
                        <li>Model is 170/ 5’7” Tall</li>
                        <li>Shoulder seam to hem measures appox 58”/ 147 cm in lenght</li>
                      </ul>
                    </div>
                  </td>
                </tr>
                <tr>
                  <th scope="row">Availability</th>
                  <td>instock</td>
                  <td>instock</td>
                </tr>
                <tr>
                  <th scope="row">color</th>
                  <td>blue</td>
                  <td>black</td>
                </tr>
                <tr>
                  <th scope="row">Sku Code</th>
                  <td>h124548461</td>
                  <td>b124741991</td>
                </tr>
                <tr>
                  <th scope="row">price</th>
                  <td><span class="color-theme">$ 30.00</span></td>
                  <td><span class="color-theme">$ 23.00</span></td>
                </tr>
                <tr>
                  <th scope="row">Order</th>
                  <td> <a href="page-cart.html" class="btn btn--primary btn--block">Add to
                      cart</a></td>
                  <td> <a href="page-cart.html" class="btn btn--primary btn--block">Add to
                      cart</a></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div><!-- .modal-body end -->
      </div>
      <!-- .modal-content end -->
    </div>
    <!-- .modal-dialog end -->
  </div>
  <!-- .modal end -->
</div><!-- #wrapper end -->

<!-- Footer Scripts
============================================= -->
<script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins.js') }}"></script>
<script src="{{ asset('assets/js/functions.js') }}"></script>
</body>
</html>
