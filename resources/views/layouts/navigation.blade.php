    <div class="preloader"></div> 
	
    <div class="search-backdrop"></div>

    {{-- @dd(auth()->user()) --}}
	
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
                        @if (auth()->user())
                            <div class="login"><i class="icon fa fa-user"></i>Selamat datang, {{ auth()->user()->name }}</div>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: inline;">
                                @csrf
                                <button type="submit" class="btn btn-logout">Logout</button>
                            </form>
                        @else
                            <div class="login"><i class="icon fa fa-user"></i> <a href="/login">SIGN IN</a></div>
                        @endif
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
                                    <li class="dropdown"><a href="/about">About Us</a></li>
                                    <li class="dropdown"><a href="/tours">Packages Tour</a></li>
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