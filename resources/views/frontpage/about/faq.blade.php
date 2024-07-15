@extends('layouts.app')

@section('content')
    <!-- Banner Section -->
    <section class="inner-banner">
        <div class="image-layer" style="background-image: url({{ asset('storage/images/background/banner-image-1.jpg') }});"></div>
        <div class="auto-container">
            <div class="content-box">
                <h2>FAQ</h2>
                <div class="bread-crumb">
                    <ul class="clearfix">
                        <li><span class="icon-home fa fa-home"></span><a href="index.html">Home</a></li>
                        <li class="current">FAQ</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--End Banner Section -->

    <!--FAQs Section-->
    <section class="faq-two">
        <div class="floated-icon left"><img src="{{ asset('storage/images/resource/stones-left.svg') }}" alt="" title=""></div>
        <div class="floated-icon right"><img src="{{ asset('storage/images/resource/stones-right.svg') }}" alt="" title=""></div>
        <div class="auto-container">
            <div class="title-box centered">
                <h2><span>Frequently asked question</span></h2>
                <div class="text">Since 2014, we’ve helped more than 500,000 people of all ages enjoy the best outdoor experience of their lives. Whether it’s for one day or a two-week vacation, close to home or a foreign land.</div>
            </div>
            <div class="tabs-box">
                <ul class="tab-buttons clearfix">
                    <li class="tab-btn active-btn" data-tab="#tab-1"><span>All</span></li>
                    <li class="tab-btn" data-tab="#tab-2"><span>activities</span></li>
                    <li class="tab-btn" data-tab="#tab-3"><span>Destinations</span></li>
                    <li class="tab-btn" data-tab="#tab-4"><span>Tours</span></li>
                </ul>
                <div class="tabs-content">
                    <!--Tab-->
                    <div class="tab active-tab" id="tab-1">
                        <div class="tab-inner">
                            <div class="row clearfix">
                                
                                <div class="text-col col-lg-6 col-md-12 col-sm-12">
                                    <!--Block-->
                                    <div class="faq-block">
                                        <div class="inner">
                                            <div class="title">
                                                <h5>How to pay an online travel reservation ?</h5>
                                            </div>
                                            <div class="text">will specify the damages that one party our store owner, will be obligated to provide to the other customer, in the event of product failure and should reflect the level of risk involved</div>
                                        </div>
                                    </div>
                                    
                                    <!--Block-->
                                    <div class="faq-block">
                                        <div class="inner">
                                            <div class="title">
                                                <h5>Which currency do we accept in your agency ?</h5>
                                            </div>
                                            <div class="text">First of all we are delivery some country Duis finibus, nibh eu dignissim laoreet, odio augue gravida elit, sed sollicitudin ipsum mauris at eros. Vivamus cursus some country Duis finibus</div>
                                        </div>
                                    </div>

                                    <!--Block-->
                                    <div class="faq-block">
                                        <div class="inner">
                                            <div class="title">
                                                <h5>How can you become your external partner ?</h5>
                                            </div>
                                            <div class="text">First of all we are delivery some country Duis finibus, nibh eu dignissim laoreet, odio augue gravida elit, sed sollicitudin ipsum id commodo ex convallis nec. Cras convallis dictum sapien.</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="text-col col-lg-6 col-md-12 col-sm-12">
                                    <!--Block-->
                                    <div class="faq-block">
                                        <div class="inner">
                                            <div class="title">
                                                <h5>How to became a VIP customer in your agency ?</h5>
                                            </div>
                                            <div class="text">will specify the damages that one party our store owner, will be obligated to provide to the other customer, in the event of product failure and should reflect the level of risk involved</div>
                                        </div>
                                    </div>
                                    
                                    <!--Block-->
                                    <div class="faq-block">
                                        <div class="inner">
                                            <div class="title">
                                                <h5>How can I change my money for my next holiday ?</h5>
                                            </div>
                                            <div class="text">First of all we are delivery some country Duis finibus, nibh eu dignissim laoreet, odio augue gravida elit, sed sollicitudin ipsum mauris at eros. Vivamus cursus some country Duis finibus</div>
                                        </div>
                                    </div>

                                    <!--Block-->
                                    <div class="faq-block">
                                        <div class="inner">
                                            <div class="title">
                                                <h5>Do you have any affiliate program for children ?</h5>
                                            </div>
                                            <div class="text">First of all we are delivery some country Duis finibus, nibh eu dignissim laoreet, odio augue gravida elit, sed sollicitudin ipsum id commodo ex convallis nec. Cras convallis dictum sapien.</div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                    <!--Tab-->
                    <div class="tab" id="tab-2">
                        <div class="tab-inner">
                            <div class="row clearfix">
                                
                                <div class="text-col col-lg-6 col-md-12 col-sm-12">
                                    <!--Block-->
                                    <div class="faq-block">
                                        <div class="inner">
                                            <div class="title">
                                                <h5>How to pay an online travel reservation ?</h5>
                                            </div>
                                            <div class="text">will specify the damages that one party our store owner, will be obligated to provide to the other customer, in the event of product failure and should reflect the level of risk involved</div>
                                        </div>
                                    </div>
                                    
                                    <!--Block-->
                                    <div class="faq-block">
                                        <div class="inner">
                                            <div class="title">
                                                <h5>Which currency do we accept in your agency ?</h5>
                                            </div>
                                            <div class="text">First of all we are delivery some country Duis finibus, nibh eu dignissim laoreet, odio augue gravida elit, sed sollicitudin ipsum mauris at eros. Vivamus cursus some country Duis finibus</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="text-col col-lg-6 col-md-12 col-sm-12">
                                    <!--Block-->
                                    <div class="faq-block">
                                        <div class="inner">
                                            <div class="title">
                                                <h5>How to became a VIP customer in your agency ?</h5>
                                            </div>
                                            <div class="text">will specify the damages that one party our store owner, will be obligated to provide to the other customer, in the event of product failure and should reflect the level of risk involved</div>
                                        </div>
                                    </div>
                                    
                                    <!--Block-->
                                    <div class="faq-block">
                                        <div class="inner">
                                            <div class="title">
                                                <h5>How can I change my money for my next holiday ?</h5>
                                            </div>
                                            <div class="text">First of all we are delivery some country Duis finibus, nibh eu dignissim laoreet, odio augue gravida elit, sed sollicitudin ipsum mauris at eros. Vivamus cursus some country Duis finibus</div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                    <!--Tab-->
                    <div class="tab" id="tab-3">
                        <div class="tab-inner">
                            <div class="row clearfix">
                                
                                <div class="text-col col-lg-6 col-md-12 col-sm-12">
                                    <!--Block-->
                                    <div class="faq-block">
                                        <div class="inner">
                                            <div class="title">
                                                <h5>How to pay an online travel reservation ?</h5>
                                            </div>
                                            <div class="text">will specify the damages that one party our store owner, will be obligated to provide to the other customer, in the event of product failure and should reflect the level of risk involved</div>
                                        </div>
                                    </div>
                                    
                                    <!--Block-->
                                    <div class="faq-block">
                                        <div class="inner">
                                            <div class="title">
                                                <h5>Which currency do we accept in your agency ?</h5>
                                            </div>
                                            <div class="text">First of all we are delivery some country Duis finibus, nibh eu dignissim laoreet, odio augue gravida elit, sed sollicitudin ipsum mauris at eros. Vivamus cursus some country Duis finibus</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="text-col col-lg-6 col-md-12 col-sm-12">
                                    <!--Block-->
                                    <div class="faq-block">
                                        <div class="inner">
                                            <div class="title">
                                                <h5>How to became a VIP customer in your agency ?</h5>
                                            </div>
                                            <div class="text">will specify the damages that one party our store owner, will be obligated to provide to the other customer, in the event of product failure and should reflect the level of risk involved</div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                    <!--Tab-->
                    <div class="tab" id="tab-4">
                        <div class="tab-inner">
                            <div class="row clearfix">
                                
                                <div class="text-col col-lg-6 col-md-12 col-sm-12">
                                    
                                    <!--Block-->
                                    <div class="faq-block">
                                        <div class="inner">
                                            <div class="title">
                                                <h5>How can you become your external partner ?</h5>
                                            </div>
                                            <div class="text">First of all we are delivery some country Duis finibus, nibh eu dignissim laoreet, odio augue gravida elit, sed sollicitudin ipsum id commodo ex convallis nec. Cras convallis dictum sapien.</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="text-col col-lg-6 col-md-12 col-sm-12">
                                    <!--Block-->
                                    <div class="faq-block">
                                        <div class="inner">
                                            <div class="title">
                                                <h5>How to became a VIP customer in your agency ?</h5>
                                            </div>
                                            <div class="text">will specify the damages that one party our store owner, will be obligated to provide to the other customer, in the event of product failure and should reflect the level of risk involved</div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!--FAQs Section-->
    <section class="faq-one alternate">
        <div class="auto-container">
            <div class="title-box centered">
                <h2><span>Most frequent question</span></h2>
            </div>
            <div class="row clearfix">
                <!--Text Col-->
                <div class="text-col col-lg-6 col-md-12 col-sm-12">
                    <div class="inner wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <div class="accordion-box clearfix">
                            <!--Block-->
                            <div class="accordion block active-block">
                                <div class="acc-btn active">What is Trekking? <i class="fa-regular fa-angle-down"></i></div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">One of the major benefits of trekking is that it improves your physical health immensely. Spending multiple hours on the trail, climbing around boulders.</div>
                                    </div>
                                </div>
                            </div>
                            <!--Block-->
                            <div class="accordion block">
                                <div class="acc-btn">What do I need to carry? <i class="fa-regular fa-angle-down"></i></div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">One of the major benefits of trekking is that it improves your physical health immensely. Spending multiple hours on the trail, climbing around boulders.</div>
                                    </div>
                                </div>
                            </div>
                            <!--Block-->
                            <div class="accordion block">
                                <div class="acc-btn">How concerned should I be about the altitude? <i class="fa-regular fa-angle-down"></i></div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">One of the major benefits of trekking is that it improves your physical health immensely. Spending multiple hours on the trail, climbing around boulders.</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!--Text Col-->
                <div class="text-col col-lg-6 col-md-12 col-sm-12">
                    <div class="inner wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <div class="accordion-box clearfix">
                            
                            <!--Block-->
                            <div class="accordion block">
                                <div class="acc-btn">What do we eat and drink while on trek? <i class="fa-regular fa-angle-down"></i></div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">One of the major benefits of trekking is that it improves your physical health immensely. Spending multiple hours on the trail, climbing around boulders.</div>
                                    </div>
                                </div>
                            </div>
                            <!--Block-->
                            <div class="accordion block active-block">
                                <div class="acc-btn active">What do I need to carry? <i class="fa-regular fa-angle-down"></i></div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">One of the major benefits of trekking is that it improves your physical health immensely. Spending multiple hours on the trail, climbing around boulders.</div>
                                    </div>
                                </div>
                            </div>
                            <!--Block-->
                            <div class="accordion block">
                                <div class="acc-btn">How concerned should I be about the altitude? <i class="fa-regular fa-angle-down"></i></div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">One of the major benefits of trekking is that it improves your physical health immensely. Spending multiple hours on the trail, climbing around boulders.</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Sponsors Section-->
    <section class="sponsors-one">
        <div class="auto-container">
            <div class="carousel-box">
                <div class="sponsors-carousel owl-theme owl-carousel">
                    <!--Block-->
                    <div class="sponsor-block">
                        <div class="inner-box">
                            <div class="image"><a href="#"><img src="{{ asset('storage/images/resource/sponsor-1.png') }}" alt=""></a></div>
                        </div>
                    </div>

                    <!--Block-->
                    <div class="sponsor-block">
                        <div class="inner-box">
                            <div class="image"><a href="#"><img src="{{ asset('storage/images/resource/sponsor-2.png') }}" alt=""></a></div>
                        </div>
                    </div>

                    <!--Block-->
                    <div class="sponsor-block">
                        <div class="inner-box">
                            <div class="image"><a href="#"><img src="{{ asset('storage/images/resource/sponsor-3.png') }}" alt=""></a></div>
                        </div>
                    </div>

                    <!--Block-->
                    <div class="sponsor-block">
                        <div class="inner-box">
                            <div class="image"><a href="#"><img src="{{ asset('storage/images/resource/sponsor-4.png') }}" alt=""></a></div>
                        </div>
                    </div>

                    <!--Block-->
                    <div class="sponsor-block">
                        <div class="inner-box">
                            <div class="image"><a href="#"><img src="{{ asset('storage/images/resource/sponsor-5.png') }}" alt=""></a></div>
                        </div>
                    </div>

                    <!--Block-->
                    <div class="sponsor-block">
                        <div class="inner-box">
                            <div class="image"><a href="#"><img src="{{ asset('storage/images/resource/sponsor-1.png') }}" alt=""></a></div>
                        </div>
                    </div>

                    <!--Block-->
                    <div class="sponsor-block">
                        <div class="inner-box">
                            <div class="image"><a href="#"><img src="{{ asset('storage/images/resource/sponsor-2.png') }}" alt=""></a></div>
                        </div>
                    </div>

                    

                </div>
            </div>
        </div>
    </section>
@endsection