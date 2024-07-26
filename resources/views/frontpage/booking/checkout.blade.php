<x-app-layout>
    @include('components.banner', ['title' => 'Checkout', 'subtitle' => 'Form'])    

    {{-- @dd($booking) --}}
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
                                        <li class="sum-head clearfix"><span class="ttl">Tour Packages</span> <span class="dtl">Subtotal</span></li>
                                        <li class="prod clearfix"><span class="ttl">{{ $booking->name }}</span> <span class="dtl" id="price" value="{{ $booking->price }}">Rp. {{ $booking->price }}</span></li>
                                        <li class="prod clearfix"><span class="ttl">Pajak</span> <span class="dtl" id="tax">11%</span></li>
                                        <li class="prod clearfix"><span class="ttl">Fee Payment</span> <span class="dtl" id="fee">5%</span></li>
                                        <li class="g-total clearfix"><span class="ttl">Total</span> <span class="dtl" id="total">Rp. </span></li>                                        
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

    {{-- <div class="checkout-page px-5 {{ auth()->user() === null ? ' ' : 'd-none ' }}">
        <div class="alert alert-danger" role="alert">
            Mohon untuk login terlebih dahulu
          </div>
    </div> --}}
    <!-- End Checkout Page -->

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const priceElement = document.getElementById('price');
            const taxElement = document.getElementById('tax');
            const feeElement = document.getElementById('fee');
            const totalElement = document.getElementById('total');

            console.log(priceElement.value, taxElement, feeElement,totalElement);
    
            // // // Function to extract numeric value from string (e.g., "Rp. 1000" -> 1000)
            // // function extractNumericValue(value) {
            // //     return parseFloat(value.replace(/[^\d.-]/g, ''));
            // // }
    
            // // Function to format number as currency (e.g., 1000 -> "Rp. 1,000.00")
            // function formatCurrency(value) {
            //     return new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(value);
            // }
    
            // // Extract values
            // const price = extractNumericValue(priceElement.textContent);
            // const taxRate = extractNumericValue(taxElement.textContent) / 100;
            // const feeRate = extractNumericValue(feeElement.textContent) / 100;
    
            // Calculate total
            // const taxAmount = price * taxRate;
            // const feeAmount = price * feeRate;
            const total = priceElement + taxElement + feeElement;

            // console.log(price);
    
            // Update total in HTML
            totalElement.textContent = total;
            console.log(total);
        });
    </script>
    
</x-app-layout>