@extends('layouts.app')

@section('content')
    <!-- Banner Section -->
    <section class="inner-banner">
        <div class="image-layer" style="background-image: url({{ asset('storage/images/background/banner-image-1.jpg') }});"></div>
        <div class="auto-container">
            <div class="content-box">
                <h2>Shop</h2>
                <div class="bread-crumb">
                    <ul class="clearfix">
                        <li><span class="icon-home fa fa-home"></span><a href="index.html">Home</a></li>
                        <li class="current">Shop</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--End Banner Section -->

    <!--Products Section-->
    <section class="products-section products-page">
        <div class="floated-icon left"><img src="{{ asset('storage/images/resource/stones-left.svg') }}" alt="" title=""></div>
        <div class="floated-icon right"><img src="{{ asset('storage/images/resource/stones-right.svg') }}" alt="" title=""></div>
        <div class="floated-icon right-2"><img src="{{ asset('storage/images/resource/plant-icon.svg') }}" alt="" title=""></div>
        <div class="auto-container">

            <div class="title-box centered">
                <h2><span>Featured Trekking Products</span></h2>
                <div class="text">Since 2014, we’ve helped more than 500,000 people of all ages enjoy the best outdoor experience of their lives. Whether it’s for one day or a two-week vacation, close to home or a foreign land.</div>
            </div>

            <div class="filters-row clearfix">
                <div class="cat-links">
                    <ul class="clearfix">
                        <li><a href="#" class="active">All</a></li>
                        <li><a href="#">Business</a></li>
                        <li><a href="#">Life Style</a></li>
                        <li><a href="#">Music</a></li>
                        <li><a href="#">Technology</a></li>
                        <li><a href="#">Clothing</a></li>
                        <li><a href="#">Accessories</a></li>
                    </ul>
                </div>
                <div class="sort-by">
                    <div class="drop-list-one">
                        <div class="inner clearfix">
                            <div class="dropdown-outer open"><a class="btn-box dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" href="#">Default sorting</a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <li><a href="#">Default: Latest First</a></li>
                                    <li><a href="#">Price: High to Low</a></li>
                                    <li><a href="#">Date: Ascending</a></li>
                                    <li><a href="#">Date: Descending</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="results-info">Showing all 5 results</div>
            <div class="row clearfix">
                <!--Block-->
                <div class="prod-block col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="why-block">
                            <div class="image-box">
                                <div class="image"><a href="#"><img src="{{ asset('storage/images/resource/shop/prod-1.jpg') }}" alt=""></a></div>
                                <div class="hvr-box">
                                    <div class="hvr-inner">
                                        <div class="hvr-content">
                                            <div class="link"><a href="#" class="theme-btn"><i class="far fa-shopping-cart"></i> Add To Cart</a></div>
                                            <div class="link"><a href="#" class="theme-btn"><i class="far fa-bars"></i> Details</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="add-fav"><a href="#" class="theme-btn"><i class="far fa-heart"></i></a></div>
                            </div>
                            <div class="lower-box">
                                <h5><a href="#">Smart Air Bag Travel</a></h5>
                                <div class="price"><span>$225.00</span></div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="prod-block col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="why-block">
                            <div class="image-box">
                                <div class="image"><a href="#"><img src="{{ asset('storage/images/resource/shop/prod-2.jpg') }}" alt=""></a></div>
                                <div class="hvr-box">
                                    <div class="hvr-inner">
                                        <div class="hvr-content">
                                            <div class="link"><a href="#" class="theme-btn"><i class="far fa-shopping-cart"></i> Add To Cart</a></div>
                                            <div class="link"><a href="#" class="theme-btn"><i class="far fa-bars"></i> Details</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="add-fav"><a href="#" class="theme-btn"><i class="far fa-heart"></i></a></div>
                            </div>
                            <div class="lower-box">
                                <h5><a href="#">Smart Air Bag Travel</a></h5>
                                <div class="price"><span>$225.00</span></div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="prod-block col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="why-block">
                            <div class="image-box">
                                <div class="image"><a href="#"><img src="{{ asset('storage/images/resource/shop/prod-3.jpg') }}" alt=""></a></div>
                                <div class="hvr-box">
                                    <div class="hvr-inner">
                                        <div class="hvr-content">
                                            <div class="link"><a href="#" class="theme-btn"><i class="far fa-shopping-cart"></i> Add To Cart</a></div>
                                            <div class="link"><a href="#" class="theme-btn"><i class="far fa-bars"></i> Details</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="add-fav"><a href="#" class="theme-btn"><i class="far fa-heart"></i></a></div>
                            </div>
                            <div class="lower-box">
                                <h5><a href="#">Smart Air Bag Travel</a></h5>
                                <div class="price"><span>$225.00</span></div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="prod-block col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="why-block">
                            <div class="image-box">
                                <div class="image"><a href="#"><img src="{{ asset('storage/images/resource/shop/prod-4.jpg') }}" alt=""></a></div>
                                <div class="hvr-box">
                                    <div class="hvr-inner">
                                        <div class="hvr-content">
                                            <div class="link"><a href="#" class="theme-btn"><i class="far fa-shopping-cart"></i> Add To Cart</a></div>
                                            <div class="link"><a href="#" class="theme-btn"><i class="far fa-bars"></i> Details</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="add-fav"><a href="#" class="theme-btn"><i class="far fa-heart"></i></a></div>
                            </div>
                            <div class="lower-box">
                                <h5><a href="#">Smart Air Bag Travel</a></h5>
                                <div class="price"><span>$225.00</span></div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="prod-block col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="why-block">
                            <div class="image-box">
                                <div class="image"><a href="#"><img src="{{ asset('storage/images/resource/shop/prod-5.jpg') }}" alt=""></a></div>
                                <div class="hvr-box">
                                    <div class="hvr-inner">
                                        <div class="hvr-content">
                                            <div class="link"><a href="#" class="theme-btn"><i class="far fa-shopping-cart"></i> Add To Cart</a></div>
                                            <div class="link"><a href="#" class="theme-btn"><i class="far fa-bars"></i> Details</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="add-fav"><a href="#" class="theme-btn"><i class="far fa-heart"></i></a></div>
                            </div>
                            <div class="lower-box">
                                <h5><a href="#">Smart Air Bag Travel</a></h5>
                                <div class="price"><span>$225.00</span></div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="prod-block col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="why-block">
                            <div class="image-box">
                                <div class="image"><a href="#"><img src="{{ asset('storage/images/resource/shop/prod-6.jpg') }}" alt=""></a></div>
                                <div class="hvr-box">
                                    <div class="hvr-inner">
                                        <div class="hvr-content">
                                            <div class="link"><a href="#" class="theme-btn"><i class="far fa-shopping-cart"></i> Add To Cart</a></div>
                                            <div class="link"><a href="#" class="theme-btn"><i class="far fa-bars"></i> Details</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="add-fav"><a href="#" class="theme-btn"><i class="far fa-heart"></i></a></div>
                            </div>
                            <div class="lower-box">
                                <h5><a href="#">Smart Air Bag Travel</a></h5>
                                <div class="price"><span>$225.00</span></div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="prod-block col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="why-block">
                            <div class="image-box">
                                <div class="image"><a href="#"><img src="{{ asset('storage/images/resource/shop/prod-7.jpg') }}" alt=""></a></div>
                                <div class="hvr-box">
                                    <div class="hvr-inner">
                                        <div class="hvr-content">
                                            <div class="link"><a href="#" class="theme-btn"><i class="far fa-shopping-cart"></i> Add To Cart</a></div>
                                            <div class="link"><a href="#" class="theme-btn"><i class="far fa-bars"></i> Details</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="add-fav"><a href="#" class="theme-btn"><i class="far fa-heart"></i></a></div>
                            </div>
                            <div class="lower-box">
                                <h5><a href="#">Smart Air Bag Travel</a></h5>
                                <div class="price"><span>$225.00</span></div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="prod-block col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="why-block">
                            <div class="image-box">
                                <div class="image"><a href="#"><img src="{{ asset('storage/images/resource/shop/prod-8.jpg') }}" alt=""></a></div>
                                <div class="hvr-box">
                                    <div class="hvr-inner">
                                        <div class="hvr-content">
                                            <div class="link"><a href="#" class="theme-btn"><i class="far fa-shopping-cart"></i> Add To Cart</a></div>
                                            <div class="link"><a href="#" class="theme-btn"><i class="far fa-bars"></i> Details</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="add-fav"><a href="#" class="theme-btn"><i class="far fa-heart"></i></a></div>
                            </div>
                            <div class="lower-box">
                                <h5><a href="#">Smart Air Bag Travel</a></h5>
                                <div class="price"><span>$225.00</span></div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <div class="see-more-link"><a href="#" class="theme-btn btn-style-one"><span>Load More......</span></a></div>
        </div>
    </section>
@endsection