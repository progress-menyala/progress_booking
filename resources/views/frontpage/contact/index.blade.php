<x-app-layout>
    @include('components.banner', ['title' => 'Contact Us', 'subtitle' => 'index'])


    <!--Contact Section-->
    <section class="contact-section">
        <div class="floated-icon right"><img src="{{ asset('storage/images/resource/stones-right-3.svg') }}" alt="" title=""></div>
        <div class="floated-icon right-2"><img src="{{ asset('storage/images/resource/stones-right-2.svg') }}" alt="" title=""></div>
        <div class="auto-container">

            <div class="info-section">
                <div class="row clearfix">
                    <!--Block-->
                    <div class="info-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="map-icon"><img src="{{ asset('storage/images/resource/europe-map.svg') }}" alt="" title=""></div>
                            <h5>Europe</h5>
                            <div class="address text">Europe 45 Gloucester Road <br>London T1M 3BF</div>
                            <div class="phone"><a href="tel:+4402036715709">+44 (0)20 3671 5709</a></div>
                        </div>
                    </div>
                    <!--Block-->
                    <div class="info-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="map-icon"><img src="{{ asset('storage/images/resource/asia-map.svg') }}" alt="" title=""></div>
                            <h5>Asia & Pacific</h5>
                            <div class="address text">2473 Red Road Ste 98 <br>Singapore SG</div>
                            <div class="phone"><a href="tel:+16232116319">+ 1 623 211 6319</a></div>
                        </div>
                    </div>
                    <!--Block-->
                    <div class="info-block col-lg-4 col-md-12 col-sm-12">
                        <div class="inner-box">
                            <div class="map-icon"><img src="{{ asset('storage/images/resource/north-america-map.svg') }}" alt="" title=""></div>
                            <h5>North America</h5>
                            <div class="address text">Canada 45 Gloucester Road <br>London T1M 3BF</div>
                            <div class="phone"><a href="tel:+45765371319">+ 45 765 371 319</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="title-box centered">
                <h2><span>How can we Help?</span></h2>
                <div class="text">Contact us and get strapped in for a better adventure experience in your life-time. Just look for opportunity to be with nature. </div>
            </div>
            <div class="form-box site-form">
                <div class="contact-form">
                    <form method="post" action="{{ route('contact.store') }}">
                        @csrf
                        <div class="row clearfix">
                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <div class="f-label">Your Name <i>*</i></div>
                                <div class="field-inner">
                                    <input type="text" name="name" value="" placeholder="" required>
                                </div>
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <div class="f-label">Your Email <i>*</i></div>
                                <div class="field-inner">
                                    <input type="email" name="email" value="" placeholder="" required>
                                </div>
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <div class="f-label">Your Phone <i>*</i></div>
                                <div class="field-inner">
                                    <input type="text" name="phone" value="" placeholder="" required>
                                </div>
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <div class="f-label">Your Subject <i>*</i></div>
                                <div class="field-inner">
                                    <input type="text" name="subject" value="" placeholder="" required>
                                </div>
                            </div>
                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                <div class="f-label">Write Message</div>
                                <div class="field-inner">
                                    <textarea name="message" placeholder=""></textarea>
                                </div>
                            </div>
                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                <button type="submit" class="theme-btn btn-style-two"><span>Submit Now<i class="icon far fa-angle-right"></i></span></button>
                            </div>
                        </div>
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!--Find Us Section-->
    <section class="find-us">
        <div class="floated-icon left"><img src="{{ asset('storage/images/resource/stones-left.svg') }}" alt="" title=""></div>
        <div class="floated-icon right"><img src="{{ asset('storage/images/resource/floated-icon-right-2.svg') }}" alt="" title=""></div>
        <div class="auto-container">
            <div class="title-box centered">
                <h2><span>Find Our Office on Map</span></h2>
                <div class="text">Contact us and get strapped in for a better adventure experience in your life-time. Just look for opportunity to be with nature. </div>
            </div>
            <div class="row clearfix">
                <!--Text Col-->
                <div class="map-col col-lg-6 col-md-12 col-sm-12">
                    <div class="inner wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <div class="map">
                            <div class="map-image"><img src="{{ asset('storage/images/resource/world-map.svg') }}" alt="" title=""></div>
                            <div class="loc-point loc-1">
                                <div class="loc-icon"><img src="{{ asset('storage/images/icons/loc-hover.svg') }}" alt="" title=""></div>
                                <div class="loc-popup">
                                    <div class="text">Canada 45 Gloucester Road London T1M 3BF</div>
                                    <div class="link"><a href="#">View on Map</a></div>
                                </div>
                            </div>
                            <div class="loc-point loc-2">
                                <div class="loc-icon"><img src="i{{ asset('storage/images/icons/loc-hover.svg') }}" alt="" title=""></div>
                                <div class="loc-popup">
                                    <div class="text">Canada 45 Gloucester Road London T1M 3BF</div>
                                    <div class="link"><a href="#">View on Map</a></div>
                                </div>
                            </div>
                            <div class="loc-point loc-3">
                                <div class="loc-icon"><img src="{{ asset('storage/images/icons/loc-hover.svg') }}" alt="" title=""></div>
                                <div class="loc-popup">
                                    <div class="text">Canada 45 Gloucester Road London T1M 3BF</div>
                                    <div class="link"><a href="#">View on Map</a></div>
                                </div>
                            </div>
                            <div class="loc-point loc-4">
                                <div class="loc-icon"><img src="{{ asset('storage/images/icons/loc-hover.svg') }}" alt="" title=""></div>
                                <div class="loc-popup">
                                    <div class="text">Canada 45 Gloucester Road London T1M 3BF</div>
                                    <div class="link"><a href="#">View on Map</a></div>
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
                            <div class="accordion block active-block">
                                <div class="acc-btn active">How can I find your location? <i class="fa-regular fa-angle-down"></i></div>
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
            </div>
        </div>
    </section>

    <section class="map-section">
        <!--Map Box-->
        <div class="map-box">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3608.443278930481!2d55.30389370154939!3d25.25566963673736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f43254acb00ad%3A0xdbc6ee1faaf3a3c6!2sBank%20Street%20Building%20-%20UBL%20Buidling%20Bur%20Dubai%2C%20Dubai%20-%20D79%20-%20Al%20Mankhool%20-%20Dubai!5e0!3m2!1sen!2sae!4v1636553029034!5m2!1sen!2sae" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </section>

</x-app-layout>