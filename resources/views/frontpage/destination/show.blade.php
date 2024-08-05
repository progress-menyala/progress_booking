<x-app-layout>
	@include('components.banner', ['title' => 'Destination', 'subtitle' => 'detail'])

	<!-- Banner Section -->
	<section class="inner-banner">
		<div class="image-layer" style="background-image: url('{{ asset('storage/images/resource/banner-image-1.jpg') }}');"></div>
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
								<h4>Discover {{ $destination->name }}</h4>
							</div>
						</div>
					</div>
					
					<!-- Package Info Box -->
					{{-- <div class="package-info-box style-two">
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
					</div> --}}
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
					
					<h5>About {{ $destination->name }}</h5>
					<p>{!! $destination->description !!}</p>
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
						
						<!-- Buy Treker Widget -->
						<div class="sidebar-widget buy-treker-widget">
							<div class="widget-content" style="background-image: url({{ asset('storage/images/resource/buy.jpg') }})">
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

</x-app-layout>