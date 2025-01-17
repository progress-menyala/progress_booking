<x-app-layout>
     @include('components.banner', ['title' => 'About Us', 'subtitle' => 'index'])

    <!--About Us Section-->
    <section class="about-three">
        <div class="floated-icon right"><img src="{{ asset('storage/images/resource/hills-image.svg') }}" alt="" title=""></div>
        <div class="auto-container">
            <div class="row clearfix">
                <!--Text Col-->
                <div class="text-col col-lg-6 col-md-12 col-sm-12">
                    <div class="inner wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <h2>World Best Travel Agency</h2>
                        <div class="text upper-text">Since 2014, we’ve helped more than 500,000 people of all ages enjoy the best outdoor experience of their lives. Whether it’s for one day or a two-week vacation, close to home or a foreign land.</div>
                        <div class="f-blocks clearfix">
                            <div class="f-block">
                                <div class="inner-box">
                                    <div class="icon"><img src="{{ asset('storage/images/resource/about-icon-1.svg') }}" alt="" title=""></div>
                                    <h6>Expert Team for Support</h6>
                                </div>
                            </div>
                            <div class="f-block">
                                <div class="inner-box">
                                    <div class="icon"><img src="{{ asset('storage/images/resource/about-icon-2.svg') }}" alt="" title=""></div>
                                    <h6>Urgent Support for Client</h6>
                                </div>
                            </div>
                        </div>
                        <div class="quote-box">
                            <div class="quote">"Since 2014, we’ve helped more than 500,000 people of all ages enjoy the best outdoor experience of their lives."</div>
                            <div class="quote-info clearfix">
                                <div class="image"><img src="{{ asset('storage/images/resource/about-thumb-1.jpg') }}" alt="" title=""></div>
                                <div class="info">
                                    <span class="name">Jonathon bLIL</span>
                                    <span class="designation">Founder of treker</span>
                                </div>
                                <div class="signature"><img src="{{ asset('storage/images/resource/signature-1.png') }}" alt="" title=""></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Image Col-->
                <div class="image-col col-lg-6 col-md-12 col-sm-12">
                    <div class="inner wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <div class="image-box">
                            <img src="{{ asset('storage/images/resource/about-image-3.svg') }}" alt="" title="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Facts Section -->
    <section class="facts-section">
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
                                <div class="count"><span>07+</span></div>
                                <div class="fact-title"><span>Years Exp</span></div>
                            </div>
                        </div>
                        <!--Block-->
                        <div class="fact-block col-xl-3 col-lg-3 col-md-6 col-sm-12">
                            <div class="inner">
                                <div class="count"><span>2k+</span></div>
                                <div class="fact-title"><span>Top Hosts</span></div>
                            </div>
                        </div>
                        <!--Block-->
                        <div class="fact-block col-xl-3 col-lg-3 col-md-6 col-sm-12">
                            <div class="inner">
                                <div class="count"><span>50+</span></div>
                                <div class="fact-title"><span>Top Country</span></div>
                            </div>
                        </div>
                        <!--Block-->
                        <div class="fact-block col-xl-3 col-lg-3 col-md-6 col-sm-12">
                            <div class="inner">
                                <div class="count"><span>10k+</span></div>
                                <div class="fact-title"><span>Client Avilable</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Facts Section -->

    <!--Why Section-->
    <section class="why-section">
        <div class="floated-icon left"><img src="{{ asset('storage/images/resource/stones-left.svg') }}" alt="" title=""></div>
        <div class="floated-icon right"><img src="{{ asset('storage/images/resource/stones-right.svg') }}" alt="" title=""></div>
        <div class="auto-container">

            <div class="title-box centered">
                <h2><span>Why Choose Treker</span></h2>
            </div>

            <div class="row clearfix">
                <div class="left-col col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="inner">
                        <div class="why-block">
                            <div class="inner-box">
                                <div class="icon-box"><img src="{{ asset('storage/images/resource/icon-1.svg') }}" alt=""></div>
                                <h4>Diverse Destinations</h4>
                                <div class="text">Richly varied landscapes, luxury accommodation Travel.</div>
                            </div>
                        </div>
                        <div class="why-block">
                            <div class="inner-box">
                                <div class="icon-box"><img src="{{ asset('storage/images/resource/icon-2.svg') }}" alt=""></div>
                                <h4>Value for Money</h4>
                                <div class="text">Richly varied landscapes, luxury accommodation Travel.</div>
                            </div>
                        </div>
                        <div class="why-block">
                            <div class="inner-box">
                                <div class="icon-box"><img src="i{{ asset('storage/mages/resource/icon-3.svg') }}" alt=""></div>
                                <h4>Beautiful Places</h4>
                                <div class="text">Richly varied landscapes, luxury accommodation Travel.</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="right-col col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="inner">
                        <div class="why-block">
                            <div class="inner-box">
                                <div class="icon-box"><img src="{{ asset('storage/images/resource/icon-4.svg') }}" alt=""></div>
                                <h4>Fast Booking</h4>
                                <div class="text">Richly varied landscapes, luxury accommodation Travel.</div>
                            </div>
                        </div>
                        <div class="why-block">
                            <div class="inner-box">
                                <div class="icon-box"><img src="{{ asset('storage/images/resource/icon-5.svg') }}" alt=""></div>
                                <h4>Support Team</h4>
                                <div class="text">Richly varied landscapes, luxury accommodation Travel.</div>
                            </div>
                        </div>
                        <div class="why-block">
                            <div class="inner-box">
                                <div class="icon-box"><img src="{{ asset('storage/images/resource/icon-6.svg') }}" alt=""></div>
                                <h4>Passionate Travel</h4>
                                <div class="text">Richly varied landscapes, luxury accommodation Travel.</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="image-col col-xl-6 col-lg-4 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="image-box"><img src="{{ asset('storage/images/resource/why-image-1.svg') }}" alt=""></div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section mb-0">
        <div class="image-layer" style="background-image: url({{ asset('storage/images/resource/image-7.jpg') }});"></div>
        <div class="auto-container">
            <div class="upper-box">
                <div class="row clearfix">
                    <!--Block-->
                    <div class="feature-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="icon-box"><img src="{{ asset('storage/images/resource/f-icon-1.svg') }}" alt="" ></div>
                            <h5>Private Transport</h5>
                            <div class="text">Richly varied landscapes, luxury accommodation travel Fully.</div>
                        </div>
                    </div>
                    <!--Block-->
                    <div class="feature-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="icon-box"><img src="{{ asset('storage/images/resource/f-icon-2.svg') }}" alt="" ></div>
                            <h5>Diverse Destination</h5>
                            <div class="text">Richly varied landscapes, luxury accommodation travel Fully.</div>
                        </div>
                    </div>
                    <!--Block-->
                    <div class="feature-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="icon-box"><img src="{{ asset('storage/images/resource/f-icon-3.svg') }}" alt="" ></div>
                            <h5>Great Hotel</h5>
                            <div class="text">Richly varied landscapes, luxury accommodation travel Fully.</div>
                        </div>
                    </div>
                    <!--Block-->
                    <div class="feature-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="icon-box"><img src="{{ asset('storage/images/resource/f-icon-4.svg') }}" alt="" ></div>
                            <h5>Fast Booking</h5>
                            <div class="text">Richly varied landscapes, luxury accommodation travel Fully.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="carousel-box">
            <div class="auto-container">
                <div class="inner-box">
                    <div class="reviews-carousel owl-theme owl-carousel">
                        <!--Block-->
                        <div class="slide-item">
                            <div class="inner">
                                <div class="left-image">
                                    <div class="icon"><img src="{{ asset('storage/images/icons/quotes-3.svg') }}" alt=""></div>
                                    <div class="image"><img src="{{ asset('storage/images/resource/rev-thumb-4.png') }}" alt=""></div>
                                </div>
                                <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                                <div class="text">" Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum Occaecat cupidatat non proident,sunt.</div>
                                <div class="info">
                                    <span class="name">William Smith</span>
                                    <span class="designation">CEO of tourbuzz</span>
                                </div>
                            </div>
                        </div>
                        <!--Block-->
                        <div class="slide-item">
                            <div class="inner">
                                <div class="left-image">
                                    <div class="icon"><img src="{{ asset('storage/images/icons/quotes-3.svg') }}" alt=""></div>
                                    <div class="image"><img src="{{ asset('storage/images/resource/rev-thumb-4.png') }}" alt=""></div>
                                </div>
                                <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                                <div class="text">" Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum Occaecat cupidatat non proident,sunt.</div>
                                <div class="info">
                                    <span class="name">William Smith</span>
                                    <span class="designation">CEO of tourbuzz</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </section>
    

    <!--Team Section-->
    <section class="team-section">
        <div class="floated-icon left"><img src="{{ asset('storage/images/resource/team-icon-left.svg') }}" alt="" title=""></div>
        <div class="floated-icon right"><img src="{{ asset('storage/images/resource/stones-right.svg') }}" alt="" title=""></div>
        <div class="auto-container">
            <div class="title-box centered">
                <h2><span>Meet Our Tour Guide</span></h2>
            </div>
            <div class="carousel-box">
                <div class="team-carousel owl-theme owl-carousel">

                    @foreach ($organizers as $org)
                        <!--Block-->
                        <div class="team-block-one">
                            <div class="inner-box">
                                <div class="image-box">
                                    <div class="image">
                                        <a href="/organizers/{{ $org->id }}"><img src="{{ asset('storage/'. $org->image) }}" alt="" class="aspect-ratio-1-1">
                                        </a>
                                    </div>
                                </div>
                                <div class="lower-box">
                                    <h4><a href="#">{{ $org->name }}</a></h4>
                                    <div class="designation">Tour Guide || Agency Tour</div>
                                    <div class="phone">
                                        <a href="/organizers/{{ $org->id }}" class="theme-btn call-btn"><i class="fa-solid fa-arrow-right"></i></a>
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