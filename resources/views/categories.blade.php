@extends('layouts.master')

@section('title', __('main.all_categories'))

@section('content')
<!-- categorey #10
============================================= -->
<section id="categorey10" class="category category-3 category-6 category-8 pt-70 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-3">
                <div class="sidebar cat-sidebar">

                    <!-- Categories
                    ============================= -->
                    <div class="widget widget-categories2">
                        <div class="widget--title">
                            <h3>Категории</h3>
                        </div>
                        <div class="widget--content">
                            <ul class="main--list list-unstyled mb-0">
                            @foreach($categories as $category)
                                <li>
                                    <a href="{{ route('category', $category->code) }}">
                                        {{ $category->__('name') }} <span>({{ $category->products->count() }})</span>
                                    </a>
                                </li>
                            @endforeach
                            </ul>
                            <ul class="main--list list-unstyled mb-0">
                                <li class="active">
                                    <a href="#">FURNITURE <span>(1214)</span></a>
                                    <ul class="inner--list list-unstyled mb-0">
                                        <li><a href="#">Chair<span>34</span></a></li>
                                        <li><a href="#">Sofas<span>104</span></a></li>
                                        <li><a href="#">Tables<span>28</span></a></li>
                                        <li><a href="#">Bed<span>31</span></a></li>
                                        <li><a href="#">Bathrooms<span>26</span></a></li>
                                        <li><a href="#">Bookshelf<span>21</span></a></li>
                                        <li><a href="#">Accessories<span>129</span></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">LIGHTING <span>(236)</span></a>
                                    <ul class="inner--list list-unstyled mb-0">
                                        <li><a href="#">Chair<span>34</span></a></li>
                                        <li><a href="#">Sofas<span>104</span></a></li>
                                        <li><a href="#">Tables<span>28</span></a></li>
                                        <li><a href="#">Bed<span>31</span></a></li>
                                        <li><a href="#">Bathrooms<span>26</span></a></li>
                                        <li><a href="#">Bookshelf<span>21</span></a></li>
                                        <li><a href="#">Accessories<span>129</span></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">ACCESSORIES <span>(312)</span></a>
                                    <ul class="inner--list list-unstyled mb-0">
                                        <li><a href="#">Chair<span>34</span></a></li>
                                        <li><a href="#">Sofas<span>104</span></a></li>
                                        <li><a href="#">Tables<span>28</span></a></li>
                                        <li><a href="#">Bed<span>31</span></a></li>
                                        <li><a href="#">Bathrooms<span>26</span></a></li>
                                        <li><a href="#">Bookshelf<span>21</span></a></li>
                                        <li><a href="#">Accessories<span>129</span></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">SALE PRODUCTS <span>(28)</span></a>
                                    <ul class="inner--list list-unstyled mb-0">
                                        <li><a href="#">Chair<span>34</span></a></li>
                                        <li><a href="#">Sofas<span>104</span></a></li>
                                        <li><a href="#">Tables<span>28</span></a></li>
                                        <li><a href="#">Bed<span>31</span></a></li>
                                        <li><a href="#">Bathrooms<span>26</span></a></li>
                                        <li><a href="#">Bookshelf<span>21</span></a></li>
                                        <li><a href="#">Accessories<span>129</span></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div> <!-- .widget-categories end -->

                    <!-- Widget Filter
                    ============================================= -->
                    <div class="widget widget-filter">
                        <div class="widget--title">
                            <h3>Filter By</h3>
                        </div>
                        <div class="widget--content">
                            <div class="category--filter">
                                <h4 class="subtitle mt-0">price</h4>
                                <div id="slider-range"></div>
                                <p>
                                    <input type="text" id="amount" readonly>
                                </p>
                            </div>
                            <div class="size--filter">
                                <h4 class="subtitle">size</h4>

                                <form class="widget-size-form d-flex mb-0">
                                    <div class="input-radio">
                                        <label class="label-radio">
                                            <input type="radio" name="sizeSelect" checked>
                                            <span class="radio-indicator"></span>
                                            <span class="radio-content">s</span>
                                        </label>
                                    </div><!-- .input-radio end -->
                                    <div class="input-radio">
                                        <label class="label-radio">
                                            <input type="radio" name="sizeSelect">
                                            <span class="radio-indicator"></span>
                                            <span class="radio-content">M</span>
                                        </label>
                                    </div><!-- .input-radio end -->
                                    <div class="input-radio">
                                        <label class="label-radio">
                                            <input type="radio" name="sizeSelect">
                                            <span class="radio-indicator"></span>
                                            <span class="radio-content">l</span>
                                        </label>
                                    </div><!-- .input-radio end -->
                                    <div class="input-radio">
                                        <label class="label-radio">
                                            <input type="radio" name="sizeSelect">
                                            <span class="radio-indicator"></span>
                                            <span class="radio-content">xl</span>
                                        </label>
                                    </div><!-- .input-radio end -->
                                    <div class="input-radio">
                                        <label class="label-radio">
                                            <input type="radio" name="sizeSelect">
                                            <span class="radio-indicator"></span>
                                            <span class="radio-content">xxl</span>
                                        </label>
                                    </div><!-- .input-radio end -->
                                </form>
                            </div>

                            <div class="color--filter">
                                <h4 class="subtitle">color</h4>

                                <div class="colors-wrapper">
                                    <a href="#" class="color-1"></a>
                                    <a href="#" class="color-2"></a>
                                    <a href="#" class="color-3"></a>
                                    <a href="#" class="color-4 active"></a>
                                    <a href="#" class="color-5"></a>
                                    <a href="#" class="color-6"></a>
                                    <a href="#" class="color-7"></a>
                                    <a href="#" class="color-8"></a>
                                    <a href="#" class="color-9"></a>
                                    <a href="#" class="color-10"></a>
                                    <a href="#" class="color-11"></a>
                                    <a href="#" class="color-12"></a>
                                </div>
                                <form class="widget-color-form d-flex flex-wrap mb-0">
                                    <div class="input-radio">
                                        <label class="label-radio color-1">
                                            <input type="radio" name="colorSelect">
                                            <span class="radio-indicator"></span>
                                        </label>
                                    </div><!-- .input-radio end -->
                                    <div class="input-radio">
                                        <label class="label-radio color-2">
                                            <input type="radio" name="colorSelect">
                                            <span class="radio-indicator"></span>
                                        </label>
                                    </div><!-- .input-radio end -->
                                    <div class="input-radio">
                                        <label class="label-radio color-3">
                                            <input type="radio" name="colorSelect">
                                            <span class="radio-indicator"></span>
                                        </label>
                                    </div><!-- .input-radio end -->
                                    <div class="input-radio">
                                        <label class="label-radio color-4">
                                            <input type="radio" name="colorSelect" checked>
                                            <span class="radio-indicator"></span>
                                        </label>
                                    </div><!-- .input-radio end -->
                                    <div class="input-radio">
                                        <label class="label-radio color-5">
                                            <input type="radio" name="colorSelect">
                                            <span class="radio-indicator"></span>
                                        </label>
                                    </div><!-- .input-radio end -->
                                    <div class="input-radio">
                                        <label class="label-radio color-6">
                                            <input type="radio" name="colorSelect">
                                            <span class="radio-indicator"></span>
                                        </label>
                                    </div><!-- .input-radio end -->
                                    <div class="input-radio">
                                        <label class="label-radio color-7">
                                            <input type="radio" name="colorSelect">
                                            <span class="radio-indicator"></span>
                                        </label>
                                    </div><!-- .input-radio end -->
                                    <div class="input-radio">
                                        <label class="label-radio color-8">
                                            <input type="radio" name="colorSelect">
                                            <span class="radio-indicator"></span>
                                        </label>
                                    </div><!-- .input-radio end -->
                                    <div class="input-radio">
                                        <label class="label-radio color-9">
                                            <input type="radio" name="colorSelect">
                                            <span class="radio-indicator"></span>
                                        </label>
                                    </div><!-- .input-radio end -->
                                    <div class="input-radio">
                                        <label class="label-radio color-10">
                                            <input type="radio" name="colorSelect">
                                            <span class="radio-indicator"></span>
                                        </label>
                                    </div><!-- .input-radio end -->
                                    <div class="input-radio">
                                        <label class="label-radio color-11">
                                            <input type="radio" name="colorSelect">
                                            <span class="radio-indicator"></span>
                                        </label>
                                    </div><!-- .input-radio end -->
                                    <div class="input-radio">
                                        <label class="label-radio color-12">
                                            <input type="radio" name="colorSelect">
                                            <span class="radio-indicator"></span>
                                        </label>
                                    </div><!-- .input-radio end -->
                                </form>

                            </div>

                            <div class="brands--fiter">
                                <h4 class="subtitle">brands</h4>

                                <ul class="list-unstyled mb-0">
                                    <li><a href="#">Hendrerit<span>34</span></a></li>
                                    <li><a href="#">Nullam lacinia<span>104</span></a></li>
                                    <li><a href="#">Magna lacinia <span>28</span></a></li>
                                    <li><a href="#">Faucibus<span>31</span></a></li>
                                    <li><a href="#">Duis lacus<span>26</span></a></li>
                                </ul>

                            </div>

                        </div>
                    </div><!-- .widget-filter end -->

                </div>
            </div>
            <!-- .col-lg-3 end -->
            <div class="col-sm-12 col-md-12 col-lg-9">
                @include('layouts.breadcrumbs')
                <!-- .row end -->
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 mb-70">
                        <div class="banner-img--area">
                            <a href="#">
                                <img src="assets/images/banner-img/2.jpg" alt="ads" class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <!-- .col-lg-12 end -->
                </div>
                <!-- .row end -->
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 category-options">
                        <div class="category-num pull-left pull-none-xs">
                            <h2><span>260</span>PRODUCTS FOUND</h2>
                        </div>
                        <!-- .category-num end -->
                        <div class="category-select pull-right text-right text-left-sm pull-none-xs">
                            <ul class="list-unstyled mb-0">
                                <li class="option sort--options">
                                    <span class="option--title">Sort by:</span>
                                    <div class="select-form">
                                        <i class="fa fa-caret-down"></i>
                                        <select>
                                            <option selected="" value="Default">name</option>
                                            <option  value="color">color</option>
                                            <option  value="price">price</option>
                                            <option  value="branding">branding</option>
                                        </select>
                                    </div>
                                </li>
                                <li class="option">
                                    <span class="option--title">SHOW</span>
                                    <ul class="list-unstyled show--num">
                                        <li>2</li>
                                        <li>4</li>
                                        <li>6</li>
                                    </ul>
                                </li>
                                <li class="option view--type">
                                    <a id="switch-list" href="#" class=""><i class="fa fa-th"></i></a>
                                    <a id="switch-grid" href="#" class="active"><i class="fa fa-bars"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- .category-options end -->
                </div>
                <!-- .row end -->

                <div class="row mb-60">
                    @foreach($categories as $category)
                        <!-- category item #$category -->
                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <div class="category-item">
                                <div class="category--img">
                                    <img src="{{ Storage::url($category->image) }}" alt="{{ $category->__('name') }}" />
                                </div>
                                <!-- .category-img end -->
                                <div class="category--content">
                                    <div class="category--title">
                                        <h3>
                                            <a href="{{ route('category', $category->code) }}">
                                                {{ $category->__('name') }}
                                            </a>
                                        </h3>
                                    </div>
                                    <!-- .category-title end -->
                                </div>
                                <!-- .category-content end -->
                                <div class="category--hover">
                                    <div class="category--action">
                                        <div class="category--action-content">
                                            <div class="category--hover-info mb-0">
                                                <div class="category--title mb-5">
                                                    <h3><a href="{{ route('category', $category->code) }}">{{ $category->__('name') }}</a></h3>
                                                </div>
                                                <!-- .category-title end -->
                                                <a href="{{ route('category', $category->code) }}" class="btn btn--primary btn--rounded">
                                                    <i class="icon-more"></i>Подробнее
                                                </a>
                                            </div>
                                            <!-- .category-hover-info end -->
                                        </div>
                                        <!-- .category-action-content end -->
                                    </div>
                                    <!-- .category-action end -->
                                </div>
                                <!-- .category-hover end -->
                            </div>
                        </div>
                        <!-- .category-item end -->
                    @endforeach
                </div>
                <!-- .row end -->

                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 clearfix text--center">
                        <ul class="pagination">
                            <li><a href="#" aria-label="previous"><i class="fa fa-chevron-left"></i></a></li>
                            <li><a href="#">1</a></li>
                            <li class="active"><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">...</a></li>
                            <li><a href="#">10</a></li>
                            <li><a href="#">11</a></li>
                            <li><a href="#">12</a></li>
                            <li><a href="#" aria-label="Next"><i class="fa fa-chevron-right"></i></a></li>
                        </ul>
                    </div>
                    <!-- .col-lg-12 end -->
                </div>
                <!-- .row end -->
            </div>
            <!-- .col-lg-9 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #categorey end -->

@endsection
