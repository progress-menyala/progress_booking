@extends('layouts.app')

@section('content')
    <!-- Banner Section -->
    <section class="inner-banner">
        <div class="image-layer" style="background-image: url('{{ asset('storage/images/background/banner-image-1.jpg') }}');"></div>
        <div class="auto-container">
            <div class="content-box">
                <h2>ABOUT US</h2>
                <div class="bread-crumb">
                    <ul class="clearfix">
                        <li><span class="icon-home fa fa-home"></span><a href="index.html">Home</a></li>
                        <li class="current">About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--End Banner Section -->
    

    <!--Team Member-->
    <section class="team-single">
        <div class="floated-icon left"><img src="{{ asset('images/resource/dotted-pattern-1.png') }}" alt="" title=""></div>
        <div class="floated-icon right"><img src="{{ asset('images/resource/stones-right.svg') }}" alt="" title=""></div>
        <div class="auto-container">
            <div class="content-box">
                <div class="row clearfix">
                    <!--Image Col-->
                    <div class="image-col col-lg-6 col-md-6 col-sm-12">
                        <div class="inner">
                            <div class="image">
                                <div class="image"><img src="{{ asset('storage/images/resource/team-7.jpg') }}" alt="" title=""></div>
                            </div>
                        </div>
                    </div>
                    <!--Content Col-->
                    <div class="content-col col-lg-6 col-md-6 col-sm-12">
                        <div class="inner">
                            <div class="member-info">
                                <h4 class="name">Andree Hoy</h4>
                                <div class="designation">Tour Guide</div>
                            </div>
                            <div class="member-about">
                                <h6>About Me :</h6>
                                <div class="text">A traveling around from place to place. a long journey including the visiting of a number of places in sequence, especially with an organize group led by a guide. ... a journey from town to town to fulfill engments, as by a theatrical company or an entertainer:</div>
                            </div>
                            <div class="member-contact">
                                <div class="phone"><span class="icon"><img src="{{ asset('storage/images/icons/phone-1.svg') }}" alt="" title=""></span> Phone: <a href="tel:+123456789">+1 234 567 89</a></div>
                                <div class="phone"><span class="icon"><img src="{{ asset('storage/images/icons/email-1.svg') }}" alt="" title=""></span> Email: <a href="mailto:example@treker.com">example@treker.com</a></div>
                            </div>
                            <div class="member-quote">
                                <div class="icon"><img src="{{ asset('storage/images/icons/quotes-4.svg') }}" alt="" title=""></div>
                                <div class="quote">Producing Ideas Is The Main Way To Grow The Economy Life Insurance for Stay.</div>
                            </div>
                            <div class="social-links">
                                <ul class="clearfix">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!--Team Section-->
    <section class="team-section">
        <div class="auto-container">
            <div class="title-box centered">
                <h2><span>Meet Our Tour Guide</span></h2>
            </div>
            <div class="carousel-box">
                <div class="team-carousel owl-theme owl-carousel">
                    <!--Block-->
                    <div class="team-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <div class="image"><a href="#"><img src="{{ asset('storage/images/resource/team-1.jpg') }}" alt="" title=""></a></div>
                            </div>
                            <div class="lower-box">
                                <h4><a href="#">Andree Hoy</a></h4>
                                <div class="designation">Tour Guide</div>
                                <div class="phone">
                                    <a href="#" class="theme-btn call-btn"><i class="icon"><img src="{{ asset('storage/images/icons/phone-call.svg') }}" alt="" title=""></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <!--Block-->
                    <div class="team-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <div class="image"><a href="#"><img src="{{ asset('storage/images/resource/team-2.jpg') }}" alt="" title=""></a></div>
                            </div>
                            <div class="lower-box">
                                <h4><a href="#">Andree Hoy</a></h4>
                                <div class="designation">Tour Guide</div>
                                <div class="phone">
                                    <a href="#" class="theme-btn call-btn"><i class="icon"><img src="{{ asset('storage/images/icons/phone-call.svg') }}" alt="" title=""></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <!--Block-->
                    <div class="team-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <div class="image"><a href="#"><img src="{{ asset('storage/images/resource/team-3.jpg') }}" alt="" title=""></a></div>
                            </div>
                            <div class="lower-box">
                                <h4><a href="#">Andree Hoy</a></h4>
                                <div class="designation">Tour Guide</div>
                                <div class="phone">
                                    <a href="#" class="theme-btn call-btn"><i class="icon"><img src="{{ asset('storage/images/icons/phone-call.svg') }}" alt="" title=""></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
    
                   
                    <!--Block-->
                    <div class="team-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <div class="image"><a href="#"><img src="{{ asset('storage/images/resource/team-1.jpg') }}" alt="" title=""></a></div>
                            </div>
                            <div class="lower-box">
                                <h4><a href="#">Andree Hoy</a></h4>
                                <div class="designation">Tour Guide</div>
                                <div class="phone">
                                    <a href="#" class="theme-btn call-btn"><i class="icon"><img src="{{ asset('storage/images/icons/phone-call.svg') }}" alt="" title=""></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
    
                   
                    <!--Block-->
                    <div class="team-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <div class="image"><a href="#"><img src="{{ asset('storage/images/resource/team-2.jpg') }}" alt="" title=""></a></div>
                            </div>
                            <div class="lower-box">
                                <h4><a href="#">Andree Hoy</a></h4>
                                <div class="designation">Tour Guide</div>
                                <div class="phone">
                                    <a href="#" class="theme-btn call-btn"><i class="icon"><img src="{{ asset('storage/images/icons/phone-call.svg') }}" alt="" title=""></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection