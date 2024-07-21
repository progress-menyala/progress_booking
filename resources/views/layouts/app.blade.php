<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Treker - {{ env('APP_NAME') }}</title>
<!-- Stylesheets -->
<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<link rel="shortcut icon" href="{{ asset('storage/images/favicon.png') }}" type="image/x-icon">
<link rel="icon" href="{{ asset('storage/images/favicon.png') }}" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]--> 

@vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>

<body>
    <div class="page-wrapper"> 
         <!-- Preloader -->
    <div class="preloader"></div> 
	
    <div class="search-backdrop"></div>
	
    <!-- Main Header-->
    <header class="main-header">
        <div class="header-top">
            <div class="auto-container">
                <div class="inner clearfix">
                    <div class="top-left clearfix">
                        <ul class="info clearfix">
                            <li><i class="icon fa fa-envelope"></i> <a href="mailto:INFO@TREKER.COM">INFO@TREKER.COM</a></li>
                            <li><i class="icon fa fa-phone-circle"></i> <a href="tel:+11256326501">+11 256 3265 01</a></li>
                        </ul>
                    </div>
                    <div class="top-right clearfix">
                        <div class="lang-box">
                            <div class="lang-btn clearfix"><span class="img far fa-globe-americas"></span><span class="txt">Eng</span><span class="icon far fa-angle-down"></span></div>
                            <ul class="lang-list">
                                <li><a href="#">Tur</a></li>
                                <li><a href="#">Esp</a></li>
                                <li><a href="#">Rus</a></li>
                            </ul>
                        </div>
                        <div class="login"><i class="icon fa fa-user"></i> <a href="#">SIGN IN</a></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Upper -->
        <div class="header-upper">        
            <div class="auto-container">
                <!-- Main Box -->
                <div class="main-box clearfix">
                    <!--Logo-->
                    <div class="logo-box">
                        <div class="logo"><a href="/" title="Treker"><img src="{{ asset('storage/images/logo.svg') }}" alt="" title="Treker"></a></div>
                    </div>
        
                    <div class="nav-box clearfix">
                        <!--Nav Outer-->
                        <div class="nav-outer clearfix">         
                            <nav class="main-menu">
                                <ul class="navigation clearfix">
                                    <li class="current dropdown"><a href="/">Home</a></li>
                                    <li class="dropdown"><a href="/about">About Us</a>
                                        <ul>
                                            <li><a href="/about/faq">FAQs</a></li>
                                            {{-- <li><a href="gallery.html">Gallery</a></li> --}}
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="/tours">Packages Tour</a>
                                    </li>
                                    <li><a href="/destination">Destinations</a></li>
                                    <li><a href="/contact">Contact</a></li>
                                </ul>
                            </nav>
                            <!-- Main Menu End-->
                        </div>
                        <!--Nav Outer End-->
        
                        <div class="links-box clearfix">
                            <div class="link search-btn search-toggle"><span class="icon far fa-search"></span></div>
                            <div class="link fav-btn"><a href="#"><span class="icon far fa-heart"></span><span class="count">02</span></a></div>
                            <div class="link cart-btn"><a href="#" class="clearfix"><div class="cart-info"><span class="icon far fa-shopping-cart"></span>00 Items</div><div class="amount">$ 00:00</div></a></div>
                        </div>
        
                        <!-- Hidden Nav Toggler -->
                        <div class="nav-toggler">
                            <button class="hidden-bar-opener"><span class="icon"><img src="{{ asset('storage/images/icons/menu-icon.svg') }}" alt=""></span></button>
                        </div>
        
                    </div>
        
                    <!-- End Header Upper -->
                    <div class="search-box">
                        <div class="outer-container">
                            <div class="inner-box">
                                <div class="form-box">
                                    <div class="s-close-btn"><span class="icon far fa-times"></span></div>
                                    <span class="s-icon fa fa-search"></span>
                                    <form method="post" action="index.html">
                                        <div class="form-group">
                                            <input type="search" name="search" value="" placeholder="Search Here" required="">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
        
                </div>
            </div>
        </div>
        
    </header>
    <!--End Main Header -->

    <!--Search Backdrop-->
    <div class="search-backdrop"></div>
		
    <!-- Menu Backdrop -->
    <div class="menu-backdrop"></div>

    <!-- Hidden Navigation Bar -->
  
    
    <!-- / Hidden Bar -->

	<div class="cart-backdrop"></div>
	
    <!--Cart Sidebar-->
    <div class="cart-sidebar">
        <div class="cart-side-inner">
            <div class="cart-side-header">
                <div class="closer-btn"><span>Close</span></div>
                <h5>Shopping Cart</h5>
            </div>
            <div class="prod-box">
                <div class="prod-block">
                    <div class="prod-inner">
                        <div class="prod-thumb"><a href="#"><img src="{{ asset('storage/images/resource/shop/shop-thumb-1.jpg') }}" alt=""></a></div>
                        <div class="remove-item"><a href="#"><i class="far fa-times"></i></a></div>
                        <div class="prod-title"><a href="#">Smart Air Bag Travel</a></div>
                        <div class="quantity-box">
                            <div class="item-quantity">
                                <input class="qty-spinner" type="text" value="1" name="quantity">
                            </div>
                        </div>
                        <div class="calculations">1 x <span>$225.00</span></div>
                    </div>
                </div>
                <!-- You can add more product blocks here -->
            </div>
        </div>
        <div class="lower-content">
            <div class="count clearfix">
                <span class="ttl">Subtotal</span>
                <span class="dtl">$225.00</span>
            </div>
            <div class="links clearfix">
                <div class="left"><a href="#" class="theme-btn btn-style-one"><span>View Cart</span></a></div>
                <div class="right"><a href="#" class="theme-btn btn-style-two"><span>Checkout</span></a></div>
            </div>
        </div>
    </div>
    

        @yield('content')

    
        
        <!--Main Footer-->
        <footer class="main-footer">
            <div class="bg-layer" style="background-image: url({{ asset('storage/images/background/f-bottom-bg.svg') }});"></div>
            <div class="floated-icon"><img src="{{ asset('storage/images/resource/footer-stones.svg') }}" alt="" title=""></div>
            <div class="info-section">
                <div class="auto-container">
    
                    <div class="row clearfix">
    
                        <div class="footer-column col-xl-4 col-lg-12 col-md-12 col-sm-12">
                            <!--Logo-->
                            <div class="footer-logo">
                                <div class="logo"><a href="index.html" title="Treker"><img src="{{ asset('storage/images/logo.svg') }}" alt="" title="Treker"></a></div>
                            </div>
                            <div class="footer-text">Treker was founded in 1991 by a group of safety-focused professionals who created The Wingman Standard for rigorously vetting air charter operators.</div>
                        </div>
    
                        <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12">
                            <div class="row clearfix">
    
                                <div class="info-block col-lg-4 col-md-4 col-sm-12">
                                    <h6>EUROPE</h6>
                                    <div class="info">
                                        <ul>
                                            <li>Europe 45 Gloucester Road London DT1M 3BF</li>
                                            <li><a href="tel:+44(0)2036715709">+44 (0)20 3671 5709</a></li>
                                        </ul>
                                    </div>
                                </div>
    
                                <div class="info-block col-lg-4 col-md-4 col-sm-12">
                                    <h6>ASIA & PACIFIC</h6>
                                    <div class="info">
                                        <ul>
                                            <li>2473 Red Road Ste 98 Singapore SG</li>
                                            <li><a href="tel:+16232116319">+ 1 623 211 6319</a></li>
                                        </ul>
                                    </div>
                                </div>
    
                                <div class="info-block col-lg-4 col-md-4 col-sm-12">
                                    <h6>NORTH AMERICA</h6>
                                    <div class="info">
                                        <ul>
                                            <li>Europe 45 Gloucester Road London DT1M 3BF</li>
                                            <li><a href="tel:+44(0)2036715709">+44 (0)20 3671 5709</a></li>
                                        </ul>
                                    </div>
                                </div>
    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lower-section">
                <div class="auto-container">
                    <div class="content-box">
                        <div class="row clearfix">
    
                            <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12">
                                <div class="row clearfix">
    
                                    <div class="footer-column col-lg-4 col-md-4 col-sm-12">
                                        <h6>About us</h6>
                                        <div class="links">
                                            <ul>
                                                <li><a href="#">About Us</a></li>
                                                <li><a href="#">Community Blog</a></li>
                                                <li><a href="#">Rewards</a></li>
                                                <li><a href="#">Work with Us</a></li>
                                                <li><a href="#">Contact</a></li>
                                            </ul>
                                        </div>
                                    </div>
    
                                    <div class="footer-column col-lg-4 col-md-4 col-sm-12">
                                        <h6>Exlopre Treker</h6>
                                        <div class="links">
                                            <ul>
                                                <li><a href="#">Account</a></li>
                                                <li><a href="#">Privacy Policy</a></li>
                                                <li><a href="#">Affilitate</a></li><li><a href="#">Program</a></li>
                                                <li><a href="#">Our Partner</a></li>
                                            </ul>
                                        </div>
                                    </div>
    
                                    <div class="footer-column col-lg-4 col-md-4 col-sm-12">
                                        <h6>Quick lInks</h6>
                                        <div class="links">
                                            <ul>
                                                <li><a href="#">About us</a></li>
                                                <li><a href="#">News & press</a></li>
                                                <li><a href="#">Blog</a></li>
                                                <li><a href="#">FAQs</a></li>
                                                <li><a href="#">Careers</a></li>
                                            </ul>
                                        </div>
                                    </div>
    
                                </div>
                            </div>
    
                            <div class="footer-column col-xl-4 col-lg-6 col-md-8 col-sm-12">
                                <h6>Gallery</h6>
                                <!--Logo-->
                                <div class="footer-gallery">
                                    <div class="inner clearfix">
                                        <div class="image-block"><div class="image"><a href="{{ asset('storage/images/resource/footer-thumb-1.jpg') }}" class="lightbox-image"><img src="{{ asset('storage/images/resource/footer-thumb-1.jpg') }}" alt=""></a></div></div>
                                        <div class="image-block"><div class="image"><a href="{{ asset('storage/images/resource/footer-thumb-2.jpg') }}" class="lightbox-image"><img src="{{ asset('storage/images/resource/footer-thumb-2.jpg') }}" alt=""></a></div></div>
                                        <div class="image-block"><div class="image"><a href="{{ asset('storage/images/resource/footer-thumb-3.jpg') }}" class="lightbox-image"><img src="{{ asset('storage/images/resource/footer-thumb-3.jpg') }}" alt=""></a></div></div>
                                        <div class="image-block"><div class="image"><a href="{{ asset('storage/images/resource/footer-thumb-4.jpg') }}" class="lightbox-image"><img src="{{ asset('storage/images/resource/footer-thumb-4.jpg') }}" alt=""></a></div></div>
                                        <div class="image-block"><div class="image"><a href="{{ asset('storage/images/resource/footer-thumb-5.jpg') }}" class="lightbox-image"><img src="{{ asset('storage/images/resource/footer-thumb-5.jpg') }}" alt=""></a></div></div>
                                        <div class="image-block"><div class="image"><a href="{{ asset('storage/images/resource/footer-thumb-6.jpg') }}" class="lightbox-image"><img src="{{ asset('storage/images/resource/footer-thumb-6.jpg') }}" alt=""></a></div></div>
                                    </div>
                                </div>
                            </div>
    
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="f-bottom">
                <div class="auto-container">
                    <div class="inner clearfix">
                        <div class="social-links">
                            <ul class="clearfix">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="copyright">Copyright &copy; 2022 Treker. All Rights Reserved. Designed by ThemeIM</div>
                    </div>
                </div>
            </div>
    
        </footer>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.js') }}"></script>
    <script src="{{ asset('js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('js/mixitup.js') }}"></script>
    <script src="{{ asset('js/isotope.js') }}"></script>
    <script src="{{ asset('js/touchspin.js') }}"></script>
    <script src="{{ asset('js/owl.js') }}"></script>
    <script src="{{ asset('js/wow.js') }}"></script>
    <script src="{{ asset('js/custom-script.js') }}"></script>

</body>

</html>