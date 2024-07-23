<x-app-layout>
    @include('components.banner', ['title' => 'Tour Packages', 'subtitle' => 'detail'])

    <!-- product-details -->
    <section class="product-details">
        <div class="auto-container">
            <div class="basic-details">
                <div class="row clearfix">
                    <div class="image-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner">
                            <div class="carousel-box">
                                <div class="slider-box">
                                    <div class="shop-single-carousel" id="shop-single-carousel">
                                        <!--Slide Block-->
                                        <div class="slide-block">
                                            <div class="inner-box">
                                                <div class="image"><img src="{{ asset('storage/images/resource/shop/shop-single-1.jpg') }}" alt=""></div>
                                                <a href="{{ asset('storage/images/resource/shop/shop-single-1.jpg') }}" class="zoom-btn lightbox-image"><img src="{{ asset('storage/images/icons/zoom-2.svg') }}" alt=""></a>
                                            </div>
                                        </div>
                                        <!--Slide Block-->
                                        
                                        <!--Slide Block-->
                                        <div class="slide-block">
                                            <div class="inner-box">
                                                <div class="image"><img src="{{ asset('storage/images/resource/shop/shop-single-1.jpg') }}" alt=""></div>
                                                <a href="{{ asset('storage/images/resource/shop/shop-single-1.jpg') }}" class="zoom-btn lightbox-image"><img src="{{ asset('storage/images/icons/zoom-2.svg') }}" alt=""></a>
                                            </div>
                                        </div>
                                        <!--Slide Block-->
                                        
                                        <!--Slide Block-->
                                        <div class="slide-block">
                                            <div class="inner-box">
                                                <div class="image"><img src="{{ asset('storage/images/resource/shop/shop-single-1.jpg') }}" alt=""></div>
                                                <a href="{{ asset('storage/images/resource/shop/shop-single-1.jpg') }}" class="zoom-btn lightbox-image"><img src="{{ asset('storage/images/icons/zoom-2.svg') }}" alt=""></a>
                                            </div>
                                        </div>
                                        <!--Slide Block-->
                                        

                                    </div>
                                </div>
                                <div class="pagers-box">
                                    <div class="pager-two clearfix">
                                        <a href="" class="pager-item active" data-slide-index="0"><div class="image"><img src="{{ asset('storage/images/resource/shop/shop-thumb-1.jpg') }}" alt=""></div></a>
                                        <a href="" class="pager-item" data-slide-index="1"><div class="image"><img src="{{ asset('storage/images/resource/shop/shop-thumb-2.jpg') }}" alt=""></div></a>
                                        <a href="" class="pager-item" data-slide-index="2"><div class="image"><img src="{{ asset('storage/images/resource/shop/shop-thumb-3.jpg') }}" alt=""></div></a>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="content-column col-lg-6 col-md-12 col-sm-12">
                        <div class="product-details-content">
                            <div class="avail"><span>Available</span></div>
                            <h4>{{ $tour->name }}</h4>
                            <ul class="rating-box clearfix p-0">
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                            </ul>
                            <div class="item-price"><span>Rp. {{ $tour->price }}</span></div>
                            {{-- <div class="share"><a href="shop-single.html"><i class="flaticon-share-1"></i></a></div> --}}
                            <div class="text">{!! $tour->description  !!}</div>
                            <div class="other-options clearfix">
                                <div class="link-box">
                                    <button type="button" class="theme-btn btn-style-two"><span><i class="far fa-shopping-cart"></i>Booking Tour</span></button>
                                    {{-- <button type="button" class="theme-btn add-wishlist"><span><i class="far fa-heart"></i> &ensp; Add to wishlist</span></button> --}}
                                </div>
                            </div>
                            {{-- <div class="product-cat"><strong>Categories :</strong> <a href="#">Bags</a>, <a href="#">Travel Bags</a>, <a href="#">Tracking Bags</a></div>
                            <div class="product-cat tags"><strong>Tags :</strong> <a href="#">Bags</a>, <a href="#">Travel</a>, <a href="#">Tracking</a></div> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-description">
                <div class="tabs-box">
                    <div class="tab-btn-box centred">
                        <ul class="tab-btns tab-buttons">
                            <li class="tab-btn active-btn" data-tab="#tab-1">Description</li>
                            <li class="tab-btn" data-tab="#tab-2">REVIEWS (1)</li>
                        </ul>
                    </div>
                    <div class="tabs-content">
                        <div class="tab active-tab" id="tab-1">
                            <div class="text text-content">
                                <h5>Product Description</h5>
                                <p>{!! $tour->description !!}</p>
                                <h5>Product Features</h5>
                                <ul>
                                    <li>Free Download Instagram Logo</li>
                                    <li>Illustrator from Instagram Logo 9 Vectors svg vector collection</li>
                                    <li>Vectors SVG vector illustration graphic art design format.</li>
                                    <li>Following vectors are from the same pack as this vector also</li>
                                    <li>Instagram Logo SVG Vector is a part of Social Websites</li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab" id="tab-2">
                            <div class="customer-comment">
                                <div class="comment">
                                    <figure class="customer-thumb"><img src="{{ asset('storage/images/resource/shop/rev-thumb-shop.png') }}" alt=""></figure>
                                    <div class="info clearfix">
                                        <h6>Admin - </h6>
                                        <span>April 02, 2022</span>
                                    </div>
                                    <ul class="rating clearfix"> 
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star empty"></i></li>
                                    </ul>
                                    <p>Since 2014, we’ve helped more than 500,000 people of all ages enjoy the best outdoor experience of their lives. Whether it’s for one day or a two-week vacation, close to home or a foreign land.</p>
                                </div>
                            </div>

                            <div class="reply-box">
                                <h5>Add a review</h5>
                                <div class="reply-inner">
                                    <div class="default-form site-form">
                                        <form method="post" action="contact.html">
                                            <div class="row clearfix">
                                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                                    <div class="f-label">Your Rating*</div>
                                                    <div class="field-inner">
                                                        <a class="add-rating theme-btn"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></a>
                                                    </div>
                                                </div>
                                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                                    <div class="f-label">Your Review*</div>
                                                    <div class="field-inner">
                                                        <textarea name="fieldname" placeholder="" required></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                    <div class="f-label">Your Name*</div>
                                                    <div class="field-inner">
                                                        <input type="text" name="fieldname" value="" placeholder="" required>
                                                    </div>
                                                </div>
                                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                    <div class="f-label">Your Email*</div>
                                                    <div class="field-inner">
                                                        <input type="email" name="fieldname" value="" placeholder="" required>
                                                    </div>
                                                </div>
                                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                                    <button type="submit" class="theme-btn btn-style-two"><span>Post Comment<i class="icon far fa-angle-right"></i></span></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product-details end -->

    <!--Related Products Section-->
    <section class="products-section related-prod">
        <div class="floated-icon left"><img src="{{ asset('storage/images/resource/stones-left.svg') }}" alt="" title=""></div>
        <div class="auto-container">

            <div class="title-box centered">
                <h2><span>Related Product</span></h2>
            </div>
            <div class="carousel-box">
                <div class="rel-prod-carousel owl-theme owl-carousel">

                    @foreach ($tours as $tour)
                        <!--Block-->
                        <div class="prod-block">
                            <div class="inner-box">
                                <div class="why-block">
                                    <div class="image-box">
                                        <div class="image"><a href="/tours/{{ $tour->id }}"><img src="{{ asset('storage/images/resource/shop/prod-5.jpg') }}" alt=""></a></div>
                                        <div class="hvr-box">
                                            <div class="hvr-inner">
                                                <div class="hvr-content">
                                                    <div class="link"><a href="#" class="theme-btn"><i class="far fa-shopping-cart"></i> Add To Cart</a></div>
                                                    <div class="link"><a href="/tours/{{ $tour->id }}" class="theme-btn"><i class="far fa-bars"></i> Details</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <div class="add-fav"><a href="#" class="theme-btn"><i class="far fa-heart"></i></a></div> --}}
                                    </div>
                                    <div class="lower-box">
                                        <h5><a href="/tours/{{ $tour->id }}">{{ $tour->name }}</a></h5>
                                        <div class="price"><span>Rp. {{ $tour->price }}</span></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>

</x-app-layout>