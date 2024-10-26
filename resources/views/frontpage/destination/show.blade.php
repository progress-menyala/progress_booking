<x-app-layout>
	@include('components.banner', ['title' => 'Destination', 'subtitle' => 'detail'])


	<!-- Package Detail Section -->
	<section class="package-detail-section">
		<div class="auto-container">
			<div class="row clearfix">
				<!-- Content Column -->
				<div class="content-column col-xl-8 col-lg-7 col-md-12 col-sm-12">	
					<!-- Rating Box -->
					<div class="rating-box">
						<div class="clearfix">
							<div class="pull-left">
								<h4 class="fw-bold">{{$destination->id.'. '.  $destination->name }}</h4>
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
							@foreach ($photos->photo_url as $img)
								<div class="slide">
									<div class="image">
										<img src="{{ asset('storage/' . $img) }}" alt="" />
									</div>
								</div>
							@endforeach	
						</div>
					</div>
					
					<!-- Map Box -->
					<div class="map-box">
						<h5>Location</h5>
						<!--Map Outer-->
						<div class="map-outer">
							{!! $destination->maps !!}
						</div>
					</div>
					
				</div>
				<!-- Sidebar Column -->
				<div class="sidebar-column col-xl-4 col-lg-5 col-md-12 col-sm-12">
					<div class="inner-column">
						
						<!-- Buy Treker Widget -->
						<div class="sidebar-widget buy-treker-widget">
							<div class="widget-content" style="background-image: url({{ asset('storage/' . $destination->featured_image) }})">
								<div class="logo">
									<a href="index.html"><img src="{{ asset('storage/images/icons/buy-treker.svg') }}" alt="" /></a>
								</div>
								<div class="text">Awesome Trekking Travel <br> Theme !</div>
								<a href="/tours" class="theme-btn buy-now">Buy Now</a>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			
		</div>
	</section>
	<!-- End Package Detail Section -->

</x-app-layout>