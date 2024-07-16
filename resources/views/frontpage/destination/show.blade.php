@extends('layouts.app')

@section('content')

  <!-- Banner Section -->
 <section class="inner-banner">
    <div class="image-layer" style="background-image: url('{{ asset('storage/images/background/banner-image-1.jpg') }}');"></div>
    <div class="auto-container">
        <div class="content-box">
            <h2>Title</h2>
        </div>
    </div>
</section>
<!--End Banner Section -->

	<!-- Package Detail Section -->
	<section class="package-detail-section">
		<div class="auto-container">
			<div class="row clearfix">
				<!-- Content Column -->
				<div class="content-column col-xl-8 col-lg-7 col-md-12 col-sm-12">
					
					<!-- Upper Box -->
					<div class="upper-box">
						<div class="clearfix">
							<div class="pull-left">
								<h4>Discover Rajasthan</h4>
							</div>
							<div class="pull-right">
								<div class="price">$120<span>/Person</span></div>
							</div>
						</div>
					</div>
					
					<!-- Package Info Box -->
					<div class="package-info-box style-two">
						<div class="inner-container d-flex justify-content-between align-items-center">
							
							<!-- Package Info Block -->
							<div class="package-info-block">
								<div class="inner-box">
									<div class="icon"><img src="{{ asset('storage/images/icons/duration.svg') }}" alt="" /></div>
									<strong>Duration</strong>
									4 Days
								</div>
							</div>
							
							<!-- Package Info Block -->
							<div class="package-info-block">
								<div class="inner-box">
									<div class="icon"><img src="{{ asset('storage/images/icons/category-icon.svg') }}" alt="" /></div>
									<strong>Category</strong>
									Family Trip
								</div>
							</div>
							
							<!-- Package Info Block -->
							<div class="package-info-block">
								<div class="inner-box">
									<div class="icon"><img src="{{ asset('storage/images/icons/team-group.svg') }}" alt="" /></div>
									<strong>Group Size</strong>
									30 Person
								</div>
							</div>
							
						</div>
					</div>
					<!-- End Package Info Box -->
					
					<!-- Rating Box -->
					<div class="rating-box">
						<div class="clearfix">
							<div class="pull-left">
								<div class="rating">
									(5 review) &nbsp;
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
								</div>
							</div>
							<div class="pull-right">
								<ul class="post-info">
									<li><span class="icon"><img src="{{ asset('storage/images/icons/share-icon.svg') }}" alt="" /></span>Share</li>
									<li><span class="icon "><img src="{{ asset('storage/images/icons/review-icon.svg') }}" alt="" /></span>Review</li>
									<li><span class="icon "><img src="{{ asset('storage/images/icons/heart-icon-1.svg') }}" alt="" /></span>Wishlist</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- Rating Box -->
					
					<h5>About Rajasthan</h5>
					<p>There are many reasons why an executive or VIP would choose personal security services. Executives could be in charge of large companies that are worth millions or more, leaving them to be a high-valued target for robbery, assault, and more. There could be threats made against executives and even bribery and blackmail from a member of the public or disgruntled employees. When it comes to other VIPs, they do not need necessarily need to be..</p>
					<p>Leaving them to be a high-valued target for robbery, assault, and more. There could be threats made against executives and even bribery and blackmail from a member of the public or disgruntled employees. When it comes to other VIPs</p>
					<div class="feature-box">
						<h5>Features</h5>
						<ul class="feature-list">
							<li>Free Download Instagram Logo</li>
							<li>Illustrator from Instagram Logo 9 Vectors svg vector collection</li>
							<li>Vectors SVG vector illustration graphic art design format.</li>
							<li>Following vectors are from the same pack as this vector also</li>
							<li>Instagram Logo SVG Vector is a part of Social Websites</li>
						</ul>
					</div>
					<div class="facility-box">
						<h5>Facilities</h5>
						<div class="row clearfix">
							<div class="column col-lg-3 col-md-4 col-sm-12">
								<!-- Facility Box Two -->
								<div class="facility-box-two">
									<span class="icon">
										<img src="{{ asset('storage/images/icons/tour-guide.svg') }}" alt="" />
									</span>
									Tour Operator
								</div>
							</div>
							<div class="column col-lg-3 col-md-4 col-sm-12">
								<!-- Facility Box Two -->
								<div class="facility-box-two">
									<span class="icon">
										<img src="{{ asset('storage/images/icons/bill.svg') }}" alt="" />
									</span>
									Online Ticketing
								</div>
							</div>
							<div class="column col-lg-3 col-md-4 col-sm-12">
								<!-- Facility Box Two -->
								<div class="facility-box-two">
									<span class="icon">
										<img src="{{ asset('storage/images/icons/passport.svg') }}" alt="" />
									</span>
									Passport & Visa
								</div>
							</div>
							<div class="column col-lg-3 col-md-4 col-sm-12">
								<!-- Facility Box Two -->
								<div class="facility-box-two">
									<span class="icon">
										<img src="{{ asset('storage/images/icons/travel-insurance.svg') }}" alt="" />
									</span>
									Travel Insurance
								</div>
							</div>
							<div class="column col-lg-3 col-md-4 col-sm-12">
								<!-- Facility Box Two -->
								<div class="facility-box-two">
									<span class="icon">
										<img src="{{ asset('storage/images/icons/ship.svg') }}" alt="" />
									</span>
									Cruise Services
								</div>
							</div>
							<div class="column col-lg-3 col-md-4 col-sm-12">
								<!-- Facility Box Two -->
								<div class="facility-box-two">
									<span class="icon">
										<img src="{{ asset('storage/images/icons/calendar.svg') }}" alt="" />
									</span>
									Hotel Booking
								</div>
							</div>
							<div class="column col-lg-3 col-md-4 col-sm-12">
								<!-- Facility Box Two -->
								<div class="facility-box-two">
									<span class="icon">
										<img src="{{ asset('storage/images/icons/key.svg') }}" alt="" />
									</span>
									Car Rental
								</div>
							</div>
							<div class="column col-lg-3 col-md-4 col-sm-12">
								<!-- Facility Box Two -->
								<div class="facility-box-two">
									<span class="icon">
										<img src="{{ asset('storage/images/icons/events.svg') }}" alt="" />
									</span>
									Event Organizers
								</div>
							</div>
						</div>
					</div>
					
					<!-- Itinerary Box -->
					<div class="itinerary-box">
						<h5>Itinerary</h5>
						<div class="faq-one style-two">
							<div class="accordion-box clearfix">
								<!--Block-->
								<div class="accordion block active-block">
									<div class="acc-btn active">Day 1 <i class="fa-regular fa-angle-down"></i></div>
									<div class="acc-content">
										<div class="content">
											<div class="bold-text">Ranthambore National Park</div>
											<div class="text">Leaving them to be a high-valued target for robbery, assault, and more. There could be threats made against executives and even bribery and blackmail from a member of the public or disgruntled employees.</div>
											<!-- Faq Gallery -->
											<div class="faq-gallery">
												<div class="row clearfix">
													<!-- Image Column -->
													<div class="image-column col-lg-4 col-md-4 col-sm-12">
														<div class="image">
															<img src="{{ asset('storage/images/resource/faq-1.jpg') }}" alt="" />
														</div>
													</div>
													<!-- Image Column -->
													<div class="image-column col-lg-4 col-md-4 col-sm-12">
														<div class="image">
															<img src="{{ asset('storage/images/resource/faq-1.jpg') }}" alt="" />
														</div>
													</div>
													<!-- Map Column -->
													<div class="map-column col-lg-4 col-md-4 col-sm-12">
														<div class="map-boxed">
															<span class="icon fas fa-location-dot fa-fw"></span>
															<h6>Google map</h6>
														</div>
													</div>
												</div>
											</div>
											<!-- End Faq Gallery -->
											
											<!-- Faq Info Tabs -->
											<div class="faq-info-tabs">
												<!-- Faq Tabs -->
												<div class="faq-tabs tabs-box">
												
													<!-- Tab Btns -->
													<ul class="tab-btns tab-buttons clearfix">
														<li data-tab="#prod-1" class="tab-btn active-btn">Accomodation</li>
														<li data-tab="#prod-2" class="tab-btn">Meals</li>
														<li data-tab="#prod-3" class="tab-btn">Special Info</li>
													</ul>
													
													<!-- Tabs Container -->
													<div class="tabs-content">
														
														<!-- Tab / Active Tab -->
														<div class="tab active-tab" id="prod-1">
															<div class="inner-content">
																<p>There could be threats made against executives and even bribery and blackmail from a member of the public or disgruntled employees.</p>
																<div class="hotel-info">
																	<div class="hotel-image">
																		<img src="{{ asset('storage/images/resource/hotel.jpg') }}" alt="" />
																	</div>
																	<div class="hotel-name">HOTEL RAJASTHAN PALACE JAIPUR</div>
																	<ul class="list">
																		<li>
																			<span>Shared Room</span>
																			Free
																		</li>
																		<li>
																			<span>Double Room</span>
																			$50 Extar
																		</li>
																		<li>
																			<span>Single Room</span>
																			$50 Extar
																		</li>
																	</ul>
																</div>
															</div>
														</div>
														
														<!-- Tab -->
														<div class="tab" id="prod-2">
															<div class="inner-content">
																<p>There could be threats made against executives and even bribery and blackmail from a member of the public or disgruntled employees.</p>
																<div class="hotel-info">
																	<div class="hotel-image">
																		<img src="{{ asset('storage/images/resource/hotel.jpg') }}" alt="" />
																	</div>
																	<div class="hotel-name">HOTEL RAJASTHAN PALACE JAIPUR</div>
																	<ul class="list">
																		<li>
																			<span>Shared Room</span>
																			Free
																		</li>
																		<li>
																			<span>Double Room</span>
																			$50 Extar
																		</li>
																	</ul>
																</div>
															</div>
														</div>
														
														<!-- Tab -->
														<div class="tab" id="prod-3">
															<div class="inner-content">
																<p>There could be threats made against executives and even bribery and blackmail from a member of the public or disgruntled employees.</p>
																<div class="hotel-info">
																	<div class="hotel-image">
																		<img src="{{ asset('storage/images/resource/hotel.jpg') }}" alt="" />
																	</div>
																	<div class="hotel-name">HOTEL RAJASTHAN PALACE JAIPUR</div>
																	<ul class="list">
																		<li>
																			<span>Shared Room</span>
																			Free
																		</li>
																	</ul>
																</div>
															</div>
														</div>
														
													</div>
												</div>
											</div>
											
										</div>
									</div>
								</div>
								<!--Block-->
								<div class="accordion block">
									<div class="acc-btn">Day 2 <i class="fa-regular fa-angle-down"></i></div>
									<div class="acc-content">
										<div class="content">
											<div class="bold-text">Ranthambore National Park</div>
											<div class="text">Leaving them to be a high-valued target for robbery, assault, and more. There could be threats made against executives and even bribery and blackmail from a member of the public or disgruntled employees.</div>
											<!-- Faq Gallery -->
											<div class="faq-gallery">
												<div class="row clearfix">
													<!-- Image Column -->
													<div class="image-column col-lg-4 col-md-4 col-sm-12">
														<div class="image">
															<img src="{{ asset('storage/images/resource/faq-1.jpg') }}" alt="" />
														</div>
													</div>
													<!-- Image Column -->
													<div class="image-column col-lg-4 col-md-4 col-sm-12">
														<div class="image">
															<img src="{{ asset('storage/images/resource/faq-1.jpg') }}" alt="" />
														</div>
													</div>
													<!-- Map Column -->
													<div class="map-column col-lg-4 col-md-4 col-sm-12">
														<div class="map-boxed">
															<span class="icon fas fa-location-dot fa-fw"></span>
															<h6>Google map</h6>
														</div>
													</div>
												</div>
											</div>
											<!-- End Faq Gallery -->
											
											<!-- Faq Info Tabs -->
											<div class="faq-info-tabs">
												<!-- Faq Tabs -->
												<div class="faq-tabs tabs-box">
												
													<!-- Tab Btns -->
													<ul class="tab-btns tab-buttons clearfix">
														<li data-tab="#prod-4" class="tab-btn active-btn">Accomodation</li>
														<li data-tab="#prod-5" class="tab-btn">Meals</li>
														<li data-tab="#prod-6" class="tab-btn">Special Info</li>
													</ul>
													
													<!-- Tabs Container -->
													<div class="tabs-content">
														
														<!-- Tab / Active Tab -->
														<div class="tab active-tab" id="prod-4">
															<div class="inner-content">
																<p>There could be threats made against executives and even bribery and blackmail from a member of the public or disgruntled employees.</p>
																<div class="hotel-info">
																	<div class="hotel-image">
																		<img src="{{ asset('storage/images/resource/hotel.jpg') }}" alt="" />
																	</div>
																	<div class="hotel-name">HOTEL RAJASTHAN PALACE JAIPUR</div>
																	<ul class="list">
																		<li>
																			<span>Shared Room</span>
																			Free
																		</li>
																		<li>
																			<span>Double Room</span>
																			$50 Extar
																		</li>
																		<li>
																			<span>Single Room</span>
																			$50 Extar
																		</li>
																	</ul>
																</div>
															</div>
														</div>
														
														<!-- Tab -->
														<div class="tab" id="prod-5">
															<div class="inner-content">
																<p>There could be threats made against executives and even bribery and blackmail from a member of the public or disgruntled employees.</p>
																<div class="hotel-info">
																	<div class="hotel-image">
																		<img src="{{ asset('storage/images/resource/hotel.jpg') }}" alt="" />
																	</div>
																	<div class="hotel-name">HOTEL RAJASTHAN PALACE JAIPUR</div>
																	<ul class="list">
																		<li>
																			<span>Shared Room</span>
																			Free
																		</li>
																		<li>
																			<span>Double Room</span>
																			$50 Extar
																		</li>
																	</ul>
																</div>
															</div>
														</div>
														
														<!-- Tab -->
														<div class="tab" id="prod-6">
															<div class="inner-content">
																<p>There could be threats made against executives and even bribery and blackmail from a member of the public or disgruntled employees.</p>
																<div class="hotel-info">
																	<div class="hotel-image">
																		<img src="{{ asset('storage/images/resource/hotel.jpg') }}" alt="" />
																	</div>
																	<div class="hotel-name">HOTEL RAJASTHAN PALACE JAIPUR</div>
																	<ul class="list">
																		<li>
																			<span>Shared Room</span>
																			Free
																		</li>
																	</ul>
																</div>
															</div>
														</div>
														
													</div>
												</div>
											</div>
											
										</div>
									</div>
								</div>
								<!--Block-->
								<div class="accordion block">
									<div class="acc-btn">Day 3 <i class="fa-regular fa-angle-down"></i></div>
									<div class="acc-content">
										<div class="content">
											<div class="bold-text">Ranthambore National Park</div>
											<div class="text">Leaving them to be a high-valued target for robbery, assault, and more. There could be threats made against executives and even bribery and blackmail from a member of the public or disgruntled employees.</div>
											<!-- Faq Gallery -->
											<div class="faq-gallery">
												<div class="row clearfix">
													<!-- Image Column -->
													<div class="image-column col-lg-4 col-md-4 col-sm-12">
														<div class="image">
															<img src="{{ asset('storage/images/resource/faq-1.jpg') }}" alt="" />
														</div>
													</div>
													<!-- Image Column -->
													<div class="image-column col-lg-4 col-md-4 col-sm-12">
														<div class="image">
															<img src="{{ asset('storage/images/resource/faq-1.jpg') }}" alt="" />
														</div>
													</div>
													<!-- Map Column -->
													<div class="map-column col-lg-4 col-md-4 col-sm-12">
														<div class="map-boxed">
															<span class="icon fas fa-location-dot fa-fw"></span>
															<h6>Google map</h6>
														</div>
													</div>
												</div>
											</div>
											<!-- End Faq Gallery -->
											
											<!-- Faq Info Tabs -->
											<div class="faq-info-tabs">
												<!-- Faq Tabs -->
												<div class="faq-tabs tabs-box">
												
													<!-- Tab Btns -->
													<ul class="tab-btns tab-buttons clearfix">
														<li data-tab="#prod-7" class="tab-btn active-btn">Accomodation</li>
														<li data-tab="#prod-8" class="tab-btn">Meals</li>
														<li data-tab="#prod-9" class="tab-btn">Special Info</li>
													</ul>
													
													<!-- Tabs Container -->
													<div class="tabs-content">
														
														<!-- Tab / Active Tab -->
														<div class="tab active-tab" id="prod-7">
															<div class="inner-content">
																<p>There could be threats made against executives and even bribery and blackmail from a member of the public or disgruntled employees.</p>
																<div class="hotel-info">
																	<div class="hotel-image">
																		<img src="{{ asset('storage/images/resource/hotel.jpg') }}" alt="" />
																	</div>
																	<div class="hotel-name">HOTEL RAJASTHAN PALACE JAIPUR</div>
																	<ul class="list">
																		<li>
																			<span>Shared Room</span>
																			Free
																		</li>
																		<li>
																			<span>Double Room</span>
																			$50 Extar
																		</li>
																		<li>
																			<span>Single Room</span>
																			$50 Extar
																		</li>
																	</ul>
																</div>
															</div>
														</div>
														
														<!-- Tab -->
														<div class="tab" id="prod-8">
															<div class="inner-content">
																<p>There could be threats made against executives and even bribery and blackmail from a member of the public or disgruntled employees.</p>
																<div class="hotel-info">
																	<div class="hotel-image">
																		<img src="{{ asset('storage/images/resource/hotel.jpg') }}" alt="" />
																	</div>
																	<div class="hotel-name">HOTEL RAJASTHAN PALACE JAIPUR</div>
																	<ul class="list">
																		<li>
																			<span>Shared Room</span>
																			Free
																		</li>
																		<li>
																			<span>Double Room</span>
																			$50 Extar
																		</li>
																	</ul>
																</div>
															</div>
														</div>
														
														<!-- Tab -->
														<div class="tab" id="prod-9">
															<div class="inner-content">
																<p>There could be threats made against executives and even bribery and blackmail from a member of the public or disgruntled employees.</p>
																<div class="hotel-info">
																	<div class="hotel-image">
																		<img src="{{ asset('storage/images/resource/hotel.jpg') }}" alt="" />
																	</div>
																	<div class="hotel-name">HOTEL RAJASTHAN PALACE JAIPUR</div>
																	<ul class="list">
																		<li>
																			<span>Shared Room</span>
																			Free
																		</li>
																	</ul>
																</div>
															</div>
														</div>
														
													</div>
												</div>
											</div>
											
										</div>
									</div>
								</div>
								
							</div>
						</div>
					</div>
					<!-- End Itinerary Box -->
					
					<!-- Gallery Box -->
					<div class="gallery-box">
						<h5>Gallery</h5>
						<div class="single-item-carousel owl-carousel owl-theme">
							<div class="slide">
								<div class="image">
                                    <img src="{{ asset('storage/images/resource/gallery.jpg') }}" alt="" />
								</div>
							</div>
							<div class="slide">
								<div class="image">
									<img src="{{ asset('storage/images/resource/gallery.jpg') }}" alt="" />
								</div>
							</div>
							<div class="slide">
								<div class="image">
									<img src="{{ asset('storage/images/resource/gallery.jpg') }}" alt="" />
								</div>
							</div>
						</div>
					</div>
					
					<!-- Map Box -->
					<div class="map-box">
						<h5>Location</h5>
						<!--Map Outer-->
						<div class="map-outer">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d805184.6331292129!2d144.49266890254142!3d-37.97123689954809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad646b5d2ba4df7%3A0x4045675218ccd90!2sMelbourne%20VIC%2C%20Australia!5e0!3m2!1sen!2s!4v1574408946759!5m2!1sen!2s" allowfullscreen=""></iframe>
						</div>
					</div>
					
				</div>
				<!-- Sidebar Column -->
				<div class="sidebar-column col-xl-4 col-lg-5 col-md-12 col-sm-12">
					<div class="inner-column">
					
						<!-- Booking Widget -->
						<div class="sidebar-widget booking-widget" style="background-image: url(images/background/booking-bg.jpg);">
							<h5>Book this Treks</h5>
							
							<!-- Booking Form -->
							<div class="booking-form">
								
								<!-- Contact Form -->
								<form method="post" action="sendemail.php" id="contact-form">
									
									<div class="form-group">
                                        <input type="text" name="username" placeholder="Full Name" required>
                                        <span class="icon fal fa-user fa-fw"></span>
                                    </div>
                                    
                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="Email" required>
                                        <span class="icon fal fa-envelope fa-fw"></span>
                                    </div>
                                    
                                    <div class="form-group">
                                        <input type="text" name="phone" placeholder="Phone *" required>
                                        <span class="icon fal fa-phone fa-fw"></span>
                                    </div>
                                    
                                    <div class="form-group">
                                        <input type="text" class="datepicker" name="time" placeholder="DD - MM - YYYY" required>
                                        <span class="icon fal fa-calendar fa-fw"></span>
                                    </div>
									
									<div class="form-group">
										<input type="text" name="time" placeholder="Guest" required>
										<div class="item-quantity">
											<div class="quantity-spinner">
												<button type="button" class="minus"><span class="fa fa-minus"></span></button>
												<input type="text" name="product" value="2" class="prod_qty" readonly />
												<button type="button" class="plus"><span class="fa fa-plus"></span></button>
											</div>
										</div>
									</div>
									
									<div class="form-group">
										<button class="theme-btn send-btn"><span class="txt">Send Now <i class="fa fa-angle-right"></i></span></button>
									</div>
									
								</form>
									
							</div>
							<!-- End Booking Form -->
							
						</div>
						
						<!-- Follow Widget -->
						<div class="sidebar-widget follow-widget">
							<div class="sidebar-title">
								<h5>Follow us</h5>
							</div>
							<ul class="social-list">
								<li class="facebook"><span class="icon fab fa-facebook-f fa-fw"></span> <strong>1250M +</strong> Followers</li>
								<li class="twitter"><span class="icon fab fa-twitter fa-fw"></span> <strong>1250M +</strong> Followers</li>
								<li class="youtube"><span class="icon fab fa-youtube fa-fw"></span> <strong>1250M +</strong> Followers</li>
								<li class="linkedin"><span class="icon fab fa-linkedin-in fa-fw"></span> <strong>1250M +</strong> Followers</li>
							</ul>
						</div>
						
						<!-- Category Widget -->
						<div class="sidebar-widget category-widget">
							<div class="sidebar-title">
								<h5>Category</h5>
							</div>
							<ul class="sidebar-category-list">
                                <li style="background-image: url({{ asset('storage/images/background/category-1.jpg') }})">
                                    <span class="txt">Therapy</span> <span class="number">05</span>
                                </li>
                                <li style="background-image: url({{ asset('storage/images/background/category-2.jpg') }})">
                                    <span class="txt">Therapy</span> <span class="number">05</span>
                                </li>
                                <li style="background-image: url({{ asset('storage/images/background/category-3.jpg') }})">
                                    <span class="txt">Therapy</span> <span class="number">05</span>
                                </li>
                                <li style="background-image: url({{ asset('storage/images/background/category-4.jpg') }})">
                                    <span class="txt">Therapy</span> <span class="number">05</span>
                                </li>
                            </ul>
						</div>
						
						<!-- Buy Treker Widget -->
						<div class="sidebar-widget buy-treker-widget">
							<div class="widget-content" style="background-image: url({{ asset('storage/images/background/buy.jpg') }})">
								<div class="logo">
									<a href="index.html"><img src="{{ asset('storage/images/icons/buy-treker.svg') }}" alt="" /></a>
								</div>
								<div class="text">Awesome Trekking Travel <br> Theme !</div>
								<a href="#" class="theme-btn buy-now">Buy Now</a>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			
		</div>
	</section>
	<!-- End Package Detail Section -->

@endsection