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