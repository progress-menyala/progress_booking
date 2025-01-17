<x-app-layout>
    @include('components.banner', ['title' => 'Destination', 'subtitle' => 'index'])

    <!--Destination Tours Section-->
    <section class="dest-section">
        <div class="floated-icon left"><img src="{{ asset('storage/images/resource/stones-left.svg') }}" alt="" title=""></div>
        <div class="floated-icon right"><img src="{{ asset('storage/images/resource/stones-right.svg') }}" alt="" title=""></div>
        <div class="auto-container">
            <div class="title-box centered">
                <h2><span>Trending Destinations</span></h2>
                <div class="text">Since 2014, we’ve helped more than 500,000 people of all ages enjoy the best outdoor experience of their lives. Whether it’s for one day or a two-week vacation, close to home or a foreign land.</div>
            </div>
            <!--MixitUp Galery-->
            <div class="mixitup-gallery">
                <div class="filter-list row clearfix">

                    @foreach ($destinations as $destination)
                        <!--Block-->
                        <div class="trend-block-one mix all africa australia col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box">
                                    <div class="image">
                                        <a href="#"><img src="{{ asset('storage/' . $destination->featured_image) }}" alt="" title="" class="aspect-ratio-16-9 object-fit-cover">
                                        </a>
                                    </div>
                                </div>
                                <div class="count"><span>Available</span></div>
                                <div class="title clearfix">
                                    <h4><a href="">{{ $destination->name }}</a></h4>
                                    <div class="more-link"><a href="/destination/{{ $destination->id }}" class="theme-btn"><span class="far fa-long-arrow-right"></span></a></div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

                <div class="load-more"><a href="#" class="theme-btn btn-style-one"><span>Load More......</span></a></div>
            </div>
        </div>
    </section>

    <!-- Facts Section -->
    {{-- <section class="facts-section">
        <div class="image-layer" style="background-image: url({{ asset('storage/images/resource/image-6.jpg') }});"></div>
        <div class="auto-container">
            <div class="content-box">
                <div class="video-btn"><a href="https://www.youtube.com/watch?v=0xhr0j877bI" class="theme-btn lightbox-image"><span class="icon"><img src="images/icons/video-icon-2.svg" alt="" title=""></span></a></div>
                <div class="subtitle">Are you ready to travel?</div>
                <h2>Treker is a World Leading Online Tour Booking Platform</h2>
            </div>
        </div>
        <div class="facts-box">
            <div class="auto-container">
                <div class="inner-box">
                    <div class="row clearfix">
                        <!--Block-->
                        <div class="fact-block col-xl-3 col-lg-3 col-md-6 col-sm-12">
                            <div class="inner">
                                <div class="count"><span class="odometer" data-count="07"></span>+</div>
                                <div class="fact-title"><span>Years Exp</span></div>
                            </div>
                        </div>
                        <!--Block-->
                        <div class="fact-block col-xl-3 col-lg-3 col-md-6 col-sm-12">
                            <div class="inner">
                                <div class="count"><span class="odometer" data-count="02"></span>k+</div>
                                <div class="fact-title"><span>Top Hosts</span></div>
                            </div>
                        </div>
                        <!--Block-->
                        <div class="fact-block col-xl-3 col-lg-3 col-md-6 col-sm-12">
                            <div class="inner">
                                <div class="count"><span class="odometer" data-count="50"></span>+</div>
                                <div class="fact-title"><span>Top Country</span></div>
                            </div>
                        </div>
                        <!--Block-->
                        <div class="fact-block col-xl-3 col-lg-3 col-md-6 col-sm-12">
                            <div class="inner">
                                <div class="count"><span class="odometer" data-count="10"></span>k+</div>
                                <div class="fact-title"><span>Client Avilable</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--End Facts Section -->

    <!--Testimonials Section-->
    {{-- <section class="testimonials-one">
        <div class="floated-icon right"><img src="{{ asset('storage/images/resource/team-icon-left.svg') }}" alt="" title=""></div>
        <div class="floated-icon left"><img src="{{ asset('storage/images/resource/stones-left.svg') }}" alt="" title=""></div>
        <div class="auto-container">
            <div class="title-box centered">
                <h2><span>Top Reviews for Treker</span></h2>
            </div>
            <div class="carousel-box">
                <div class="testi-carousel owl-theme owl-carousel">
                    <!--Testi Block-->
                    <div class="testi-block">
                        <div class="inner-box">
                            <div class="icon"><img src="{{ asset('storage/images/icons/quotes-1.svg') }}" alt=""></div>
                            <div class="image"><img src="{{ asset('storage/images/resource/testi-thumb-1.jpg') }}" alt=""></div>
                            <div class="text">Fight School has specialized in martial arts since 1986 and has one of the most Fight School has specialized.</div>
                            <div class="info">
                                <div class="name">Randall Schwartz</div>
                                <div class="clearfix">
                                    <div class="designation">Women's Trainner</div>
                                    <div class="rating"><div class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Testi Block-->
                    <div class="testi-block alternate">
                        <div class="inner-box">
                            <div class="image-layer" style="background-image: url({{ asset('storage/images/resource/testi-image-1.jpg') }});"></div>
                            <div class="over-box">
                                <div class="over-title"><a href="#">MASTER TREKER TRAVEL</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="testi-block">
                        <div class="inner-box">
                            <div class="icon"><img src="{{ asset('storage/images/icons/quotes-1.svg') }}" alt=""></div>
                            <div class="image"><img src="{{ asset('storage/images/resource/testi-thumb-1.jpg') }}" alt=""></div>
                            <div class="text">Fight School has specialized in martial arts since 1986 and has one of the most Fight School has specialized.</div>
                            <div class="info">
                                <div class="name">Randall Schwartz</div>
                                <div class="clearfix">
                                    <div class="designation">Women's Trainner</div>
                                    <div class="rating"><div class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Testi Block-->
                    <div class="testi-block alternate">
                        <div class="inner-box">
                            <div class="image-layer" style="background-image: url({{ asset('storage/images/resource/testi-image-1.jpg') }});"></div>
                            <div class="over-box">
                                <div class="over-title"><a href="#">MASTER TREKER TRAVEL</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="testi-block">
                        <div class="inner-box">
                            <div class="icon"><img src="{{ asset('storage/images/icons/quotes-1.svg') }}" alt=""></div>
                            <div class="image"><img src="{{ asset('storage/images/resource/testi-thumb-1.jpg') }}" alt=""></div>
                            <div class="text">Fight School has specialized in martial arts since 1986 and has one of the most Fight School has specialized.</div>
                            <div class="info">
                                <div class="name">Randall Schwartz</div>
                                <div class="clearfix">
                                    <div class="designation">Women's Trainner</div>
                                    <div class="rating"><div class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Testi Block-->
                    <div class="testi-block alternate">
                        <div class="inner-box">
                            <div class="image-layer" style="background-image: url({{ asset('storage/images/resource/testi-image-1.jpg') }});"></div>
                            <div class="over-box">
                                <div class="over-title"><a href="#">MASTER TREKER TRAVEL</a></div>
                            </div>
                        </div>
                    </div>

                    

                </div>
            </div>
        </div>
    </section> --}}
</x-app-layout>