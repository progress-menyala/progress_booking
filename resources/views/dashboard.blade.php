<x-app-layout>
     <!-- Banner Section -->
     <section class="banner-section">
        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        
        <div class="banner-container">
            <div class="banner-slider-box">
                <!--Slide Item-->
                <div class="slide-item">
                    <div class="auto-container">
                      <div class="content-box">
                            <div class="content">
                                <div class="clearfix">
                                    <div class="inner">
                                        <div class="bg-image"><img src="{{ asset('storage/images/main-slider/banner-bg-text.svg') }}" alt="" title=""></div>
                                        <h2>Never Stop</h2>
                                        <h1><span>Exploring</span></h1>
                                        <div class="text">Their house is a museum where people come to see ‘em. They really are a scream the Addams Family. These days are all Happy and Free. These days are all share them with me oh baby.</div>
                                        <div class="links-box clearfix">
                                            <div class="link"><a href="/tours" class="theme-btn btn-style-one"><span>View All Tours<i class="icon"><img src="storage/images/icons/logo-icon.svg" alt="" title=""></i></span></a></div>
                                            <div class="link"><a href="https://youtu.be/IriHJJWdN1Y?si=SFbc2IZJLKp0UL53" class="theme-btn lightbox-image"><i class="ripple"></i><span class="icon"><img src="storage/images/icons/video-icon-1.svg" alt="" title=""></span></a></div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="banner-image">
                                <div class="image"><img src="{{ asset('storage/images/main-slider/banner-image-1.svg') }}" alt="" title=""></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End Banner Section -->

    <!--About Us Section-->
    <section class="about-us">
        <div class="floated-icon right"><img src="{{ asset('storage/images/resource/about-stone-right.svg') }}" alt="" title=""></div>
        <div class="auto-container">
            <div class="row clearfix">
                <!--Text Col-->
                <div class="text-col col-lg-6 col-md-12 col-sm-12">
                    <div class="inner wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <div class="title-box">
                            <div class="subtitle">About Treker</div>
                            <h2><i class="bg-vector"></i><span>World Best Travel Agency</span></h2>
                            <div class="text">Since 2014, we’ve helped more than 500,000 people of all ages enjoy the best outdoor experience of their lives. Whether it’s for one day or a two-week vacation, close to home or a foreign land.</div>
                        </div>
                        <div class="lower-box">
                            <div class="lower-inner clearfix">
                                <div class="text-content">
                                    <ul>
                                        <li>Ratione voluptatem.sequi nesciunt.</li>
                                        <li>Ratione voluptatem.</li>
                                        <li>Ratione voluptatem sequi.</li>
                                    </ul>
                                </div>
                                <div class="image-box">
                                    <img src="{{ asset('storage/images/resource/about-image-2.jpg') }}" alt="" title="">
                                    <a href="https://youtu.be/IriHJJWdN1Y?si=SFbc2IZJLKp0UL53" class="theme-btn lightbox-image overlink"><span class="icon fa fa-play"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Image Col-->
                <div class="image-col col-lg-6 col-md-12 col-sm-12">
                    <div class="inner wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <div class="bg-image">
                            <img src="{{ asset('storage/images/resource/about-vector-1.png') }}" alt="" title="">
                        </div>
                        <div class="image-box">
                            <img src="{{ asset('storage/images/resource/about-image-1.svg') }}" alt="" title="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Popular Section-->
    <section class="popular-section">
        <div class="bg-layer" style="background-image: url({{ asset('storage/images/resource/image-1.jpg') }});"></div>
        <div class="auto-container">
            <div class="title-box centered">
                <div class="subtitle">Modern & Beautiful</div>
                <h2><i class="bg-vector"></i><span>Our Most Popular Trekking</span></h2>
            </div>
            <div class="carousel-box">
                <div class="popular-carousel owl-theme owl-carousel">
                    
                    @foreach ($destinations as $destination)    
                        
                        <!-- Block -->
                        <div class="trek-block-one">
                            <div class="inner-box">
                                <div class="image-box">
                                    <div class="image"><a href="/destination/{{ $destination->id }}"><img src="{{ asset('storage/'. $destination->featured_image) }}" alt="" title=""></a></div>
                                    <div class="info">
                                        <span class="i-block">{{ $destination->location }}</span>
                                    </div>
                                </div>
                                <div class="lower-content">
                                    <h4><a href="/destination/{{ $destination->id }}">{{ $destination->name }}</a></h4>
                                    <div class="ratings clearfix">
                                        <div class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star empty"></i></div>
                                        <div class="rev"><a href="#">05 Review</a></div>
                                    </div>
                                    <div class="text">{{ Str::limit($destination->description, 100, '...') }}</div>
                                </div>
                                <div class="bottom-box clearfix">
                                    <div class="more-link"><a href="/destination/{{ $destination->id }}" class="theme-btn"><span>View Details <i class="icon"><img src="{{ asset('storage/images/icons/logo-icon.svg') }}" alt=""></i></span></a></div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>

    <!--Why Section-->
    <section class="why-section">
        <div class="floated-icon left"><img src="{{ asset('storage/images/resource/stones-left.svg') }}" alt="" title=""></div>
        <div class="floated-icon right"><img src="{{ asset('storage/images/resource/stones-right.svg') }}" alt="" title=""></div>
        <div class="auto-container">
            <div class="title-box centered">
                <div class="subtitle">We Are Awesome</div>
                <h2><i class="bg-vector"></i><span>Why Choose Treker</span></h2>
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
                                <div class="icon-box"><img src="{{ asset('storage/images/resource/icon-3.svg') }}" alt=""></div>
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
 

    <!--Group Travel Section-->
    <section class="group-travel">
        <div class="bg-layer" style="background-image: url({{ asset('storage/images/resource/image-2.jpg') }});"></div>
        <div class="auto-container">
            <div class="content-box">
                <div class="row clearfix">
                    <!--Block-->

                    @foreach ($featured as $feat)
                        <div class="travel-block-one col-lg-6 col-md-12 col-sm-12">
                            <div class="inner-box">
                                <div class="title"><h4>{{ $feat->tourPackage->name }}</h4></div>
                                <div class="content">
                                    <div class="info">
                                        <span class="i-block"><i class="icon far fa-clock"></i> {{ $feat->tourPackage->date   }}</span> &ensp;
                                    </div>
                                    <div class="price"><span>Rp. {{ $feat->tourPackage->price }}</span></div>
                                    <div class="text">{!! $feat->tourPackage->description !!}</div>
                                    <div class="link-box"><a href="/checkout/{{ $feat->tourPackage->id }}" class="theme-btn btn-style-one"><span>View Details <i class="icon"><img src="{{ asset('storage/images/icons/logo-icon.svg') }}" alt="" title=""></i></span></a></div>
                                </div>
                            </div>
                        </div>
                    @endforeach
    
                </div>
            </div>
        </div>
    </section>

    {{-- <!--News Section-->
    <section class="news-section">
        <div class="floated-icon left"><img src="{{ asset('storage/images/resource/stones-left.svg') }}" alt="" title=""></div>
        <div class="floated-icon right"><img src="{{ asset('storage/images/resource/stones-right.svg') }}" alt="" title=""></div>
        <div class="bg-layer" style="background-image: url({{ asset('storage/images/resource/image-1.jpg') }});"></div>
        <div class="auto-container">
            <div class="title-box centered">
                <div class="subtitle">Treker Top News</div>
                <h2><i class="bg-vector"></i><span>Treker Latest News</span></h2>
            </div>
            <div class="content-box">
                <div class="row clearfix">
                    <!--Block-->
                    <div class="news-block-one col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image-box">
                                <div class="image"><a href="blog-single.html"><img src="{{ asset('storage/images/resource/news-1.jpg') }}" alt="" title=""></a></div>
                                <div class="cat"><span>Trekking</span></div>
                            </div>
                            <div class="lower-content">
                                <div class="info">
                                    <span class="i-block">By : Sword Joy</span> &ensp; | &ensp; <span class="i-block">20 March 2022</span>
                                </div>
                                <h4><a href="blog-single.html">THE UPCOMING WBC CHAMP SHIPS 2022 in feb</a></h4>
                                <div class="text">Fight School has specialized in martial arts since 1986 and has one of the most innovative.</div>
                            </div>
                        </div>
                    </div>
    
                    <!--Block-->
                    <div class="news-block-one alternate col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="lower-content">
                                <div class="info">
                                    <span class="i-block">By : Sword Joy</span> &ensp; | &ensp; <span class="i-block">20 March 2022</span>
                                </div>
                                <h4><a href="blog-single.html">THE BEST BOXERS IN THEIR WEIGH Target CATEGOR</a></h4>
                                <div class="text">Fight School has specialized in martial arts since 1986 and has one of the most innovative.</div>
                            </div>
                            <div class="image-box">
                                <div class="image"><a href="blog-single.html"><img src="{{ asset('storage/images/resource/news-2.jpg') }}" alt="" title=""></a></div>
                                <div class="cat"><span>Trekking</span></div>
                            </div>
                        </div>
                    </div>
    
                    <!--Block-->
                    <div class="news-block-one col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image-box">
                                <div class="image"><a href="blog-single.html"><img src="{{ asset('storage/images/resource/news-3.jpg') }}" alt="" title=""></a></div>
                                <div class="cat"><span>Trekking</span></div>
                            </div>
                            <div class="lower-content">
                                <div class="info">
                                    <span class="i-block">By : Sword Joy</span> &ensp; | &ensp; <span class="i-block">20 March 2022</span>
                                </div>
                                <h4><a href="blog-single.html">EFFECTIVE STRATEGIES & TIPS FROM THE BEST</a></h4>
                                <div class="text">Fight School has specialized in martial arts since 1986 and has one of the most innovative.</div>
                            </div>
                        </div>
                    </div>
    
                </div>
            </div>
        </div>
    </section> --}}
    
    <!--Subscribe Section-->
    <section class="subscribe-section">
        <div class="auto-container">
            <div class="content-box">
                <div class="bg-layer" style="background-image: url({{ asset('storage/images/resource/newsletter-bg.png') }});"></div>
                <div class="row clearfix">
                    <div class="image-col col-xl-5 col-lg-6 col-md-12 col-sm-12">
                        <div class="inner">
                            <div class="image"><img src="{{ asset('storage/images/resource/newsletter-image.svg') }}" alt=""></div>
                        </div>
                    </div>
    
                    <div class="text-col col-xl-7 col-lg-6 col-md-12 col-sm-12">
                        <div class="inner">
                            <div class="title">
                                <div class="subtitle">Newsletter</div>
                                <h2>SUBSCRIBE NOW</h2>
                                <div class="text">Fight School has specialized in martial arts since 1986 and has one of the most innovative programs in the nation.</div>
                            </div>
                            <div class="form-box subscribe-form">
                                <form method="post" action="{{ route('newsletter.store') }}">
                                    @csrf
                                    <div class="form-group">
                                        <div class="field-inner">
                                            <span class="icon alt-icon far fa-envelope"></span>
                                            <input type="email" name="email" value="" placeholder="Email Address">
                                        </div>
                                        <button type="submit" class="theme-btn btn-style-one"><span>SUBSCRIBE <i class="icon fa fa-paper-plane"></i></span></button>
                                    </div>
                                </form>
                            </div>
                            @if(session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>   
    
</x-app-layout>
