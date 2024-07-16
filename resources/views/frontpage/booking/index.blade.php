@extends('layouts.app')

@section('content')
    <!-- Banner Section -->
    <section class="inner-banner">
        <div class="image-layer" style="background-image: url({{ asset('storage/images/background/banner-image-1.jpg') }});"></div>
        <div class="auto-container">
            <div class="content-box">
                <h2>Check Out</h2>
                <div class="bread-crumb">
                    <ul class="clearfix">
                        <li><span class="icon-home fa fa-home"></span><a href="index.html">Home</a></li>
                        <li class="current">Check Out</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--End Banner Section -->

    <!--CheckOut Page-->
    <section class="checkout-page">
        <div class="auto-container">
            <ul class="default-links"> 
                <li class="have-coupon with-border"><i class="icon"><img src="{{ asset('storage/images/icons/coupon-icon.svg') }}" alt=""></i> Have a coupon? <a href="#">Click here</a> to enter your code</li>
                <li>
                    <div class="coupon-form site-form">
                        <form name="coupon-form" method="post" action="checkout.html">
                            <div class="c-label">If you have a coupon, please apply it below.</div>
                            <div class="form-group clearfix">
                                <input type="text" name="coupon-code" value="" placeholder="Coupon code" required>
                                <button type="submit" class="theme-btn coupon-btn btn-style-two"><span class="btn-title">Apply coupon</span></button>
                            </div>
                        </form>
                    </div>
                </li>
            </ul> 
            <!--Checkout Details-->
            <div class="site-form">
                
                <div class="billing-detail">
                    
                    <div class="row clearfix">
                        <div class="billing-column col-lg-6 col-md-12 col-sm-12">
                            <form method="post" action="checkout.html">
                                <div class="billing-form">
                                    <h4 class="checkout-title">Billing details</h4>
                                    <div class="row clearfix">
                                        <!--Form Group-->
                                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                            <div class="f-label">First Name <i>*</i></div>
                                            <div class="field-inner">
                                                <input type="text" name="field-name" value="" placeholder="">
                                            </div>
                                        </div>

                                        <!--Form Group-->
                                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                            <div class="f-label">Last Name <i>*</i></div>
                                            <div class="field-inner">
                                                <input type="text" name="field-name" value="" placeholder="">
                                            </div>
                                        </div>

                                        <!--Form Group-->
                                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                            <div class="f-label">Company name (optional)</div>
                                            <div class="field-inner">
                                                <input type="text" name="field-name" value="" placeholder="">
                                            </div>
                                        </div>

                                        <!--Form Group-->
                                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                            <div class="f-label">Country / Region <i>*</i></div>
                                            <div class="field-inner">
                                                 <select>
                                                    <option>USA</option>
                                                    <option>China</option>
                                                    <option>Russia</option>
                                                    <option>UK</option>
                                                    <option>France</option>
                                                    <option>Germany</option>
                                                </select>
                                                <span class="alt-icon far fa-angle-down"></span>
                                            </div>
                                        </div>

                                        <!--Form Group-->
                                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                            <div class="f-label">Street address <i>*</i></div>
                                            <div class="field-inner">
                                                <input type="text" name="field-name" value="" placeholder="">
                                            </div>
                                        </div>

                                        <!--Form Group-->
                                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                            <div class="f-label">Town / City <i>*</i></div>
                                            <div class="field-inner">
                                                <input type="text" name="field-name" value="" placeholder="">
                                            </div>
                                        </div>

                                        <!--Form Group-->
                                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                            <div class="f-label">Postcode / ZIP (optional)</div>
                                            <div class="field-inner">
                                                <input type="text" name="field-name" value="" placeholder="">
                                            </div>
                                        </div>

                                        <!--Form Group-->
                                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                            <div class="f-label">Phone <i>*</i></div>
                                            <div class="field-inner">
                                                <input type="text" name="field-name" value="" placeholder="">
                                            </div>
                                        </div>

                                        <!--Form Group-->
                                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                            <div class="f-label">Email <i>*</i></div>
                                            <div class="field-inner">
                                                <input type="email" name="field-name" value="" placeholder="">
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="billing-form">
                                    <h4 class="checkout-title">Billing details</h4>
                                    <div class="row clearfix">
                                        <!--Form Group-->
                                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                            <div class="f-label">If you have a coupon, please apply it below.</div>
                                            <div class="field-inner">
                                                <textarea name="field-name" placeholder=""></textarea>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="order-column col-lg-6 col-md-12 col-sm-12">
                            <div class="order-box">
                                <h4 class="checkout-title">Your Order</h4>
                                <div class="order-summary">
                                    <ul>
                                        <li class="sum-head clearfix"><span class="ttl">Product</span> <span class="dtl">Subtotal</span></li>
                                        <li class="prod clearfix"><span class="ttl">Smart Air Bag Travel</span> <span class="dtl">$225.00</span></li>
                                        <li class="sub-total clearfix"><span class="ttl">Subtotal</span> <span class="dtl">$225.00</span></li>
                                        <li class="g-total clearfix"><span class="ttl">Total</span> <span class="dtl">$225.00</span></li>
                                    </ul>
                                </div>
                                <!--Payment Options-->
                                <div class="payment-options">
                                    <ul>
                                        <li>
                                            <div class="radio-option">
                                                <input type="radio" name="payment-group" id="payment-1" checked>
                                                <label for="payment-1"><strong>Check payment</strong></label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="radio-option">
                                                <input type="radio" name="payment-group" id="payment-2" checked>
                                                <label for="payment-2"><strong>Cash on delivery</strong></label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="radio-option">
                                                <input type="radio" name="payment-group" id="payment-3">
                                                <label for="payment-3"><strong>Paypal</strong></label>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="agreement">
                                        <input type="checkbox" name="agree" id="agree">
                                        <label for="agree">I agree with this <a href="terms-conditions.html">teams and condition</a> *</label>
                                    </div>
                                    <div class="btn-box">
                                        <button type="button" class="theme-btn btn-style-two"><span>Place Order</span></button>
                                    </div>
                                </div>
                                <!--End Place Order-->
                            </div>
                        </div>
                            
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Checkout Page -->
@endsection