<x-app-layout>
    @include('components.banner', ['title' => 'Checkout', 'subtitle' => 'Form'])    

    {{-- @dd($booking) --}}
    <!--CheckOut Page-->
    <section class="checkout-page">
        <div class="auto-container">
            {{-- <ul class="default-links"> 
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
            </ul>  --}}
            <!--Checkout Details-->
            <div class="site-form">
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                
                <div class="billing-detail">
                    
                    <div class="row clearfix">
                        <div class="order-column col-lg-6 col-md-12 col-sm-12">
                            <form method="post" action="checkout.html">
                                <div class="billing-form">
                                    <h4 class="checkout-title">Billing details</h4>
                                    <div class="row clearfix">
                                        <!--Form Group-->
                                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                            <div class="f-label">Name<i>*</i></div>
                                            <div class="field-inner">
                                                <input type="text" name="customer_name" value="{{ $booking->customer_name }}" placeholder="" disabled>
                                            </div>
                                        </div>

                                        <!--Form Group-->
                                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                            <div class="f-label">Email</div>
                                            <div class="field-inner">
                                                <input type="email" name="customer_email" value="{{ $booking->customer_email }}" placeholder="" disabled>
                                            </div>
                                        </div>

                                        <!--Form Group-->
                                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                            <div class="f-label">Phone Number<i>*</i></div>
                                            {{-- <div class="field-inner input-group">
                                                <span class="input-group-text" id="basic-addon1">+62 </span>
                                                <input class="form-controll" type="text" name="phone_number" value="" placeholder="" style="width:auto">
                                            </div> --}}

                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">+62</span>
                                                <input type="text" class="form-control" placeholder="85829161701" value="{{ $booking->phone_number }}" disabled aria-label="Username" aria-describedby="basic-addon1" style="width:auto">
                                              </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                {{-- <div class="billing-form">
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
                                </div> --}}
                            </form>
                        </div>
                        {{-- @dd($booking, $tour) --}}
                        <div class="order-column col-lg-6 col-md-12 col-sm-12">
                            <div class="order-box">
                                <h4 class="checkout-title">Your Order</h4>
                                <div class="order-summary">
                                    <ul>
                                        <li class="sum-head clearfix"><span class="ttl">Tour Packages</span> <span class="dtl">Subtotal</span></li>
                                        <li class="prod clearfix"><span class="ttl">{{ $tour->name }}</span> <span class="dtl" id="price" value="{{ $booking->price }}">Rp. {{ number_format($booking->sub_total) }}</span></li>
                                        <li class="prod clearfix"><span class="ttl">Pajak</span> <span class="dtl" id="tax">{{ $booking->tax }} %</span></li>
                                        <li class="prod clearfix"><span class="ttl">Fee Payment</span> <span class="dtl" id="fee">{{ $booking->payment_fee }} %</span></li>
                                        <li class="prod clearfix"><span class="ttl">Admin Payment</span> <span class="dtl" id="fee">{{ $booking->admin_fee }} %</span></li>
                                        <li class="g-total clearfix"><span class="ttl">Total</span> <span class="dtl" id="total">Rp. {{ number_format($booking->grand_total) }} </span></li>                                        
                                    </ul>
                                </div>
                                <!--Payment Options-->
                                <div class="payment-options mt-0 pt-0">
                                    <form action="{{ route('paymentXendit') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="booking_id" value="{{ $booking->id }}">
                                        {{-- <input type="hidden" name="snap_token" value="{{ $snapToken }}"> --}}
                                        <input type="hidden" name="total" value="{{ $booking->grand_total }}">
                                        <input type="hidden" name="customer_email" value="{{ $booking->customer_email }}">
                                        <input type="hidden" name="customer_name" value="{{ $booking->customer_name }}">
                                        <input type="hidden" name="customer_name" value="{{ $booking->customer_name }}">
                                        <input type="hidden" name="payment_method" value="xendit">
                                        
                                        <div class="btn-box mt-4">
                                            @if ($booking->status === "paid")
                                                {{-- @dd('halo'); --}}
                                                <button type="submit" class="theme-btn btn-style-two mt-2" disabled>Paid</button>
                                            @else
                                                <button type="submit" class="theme-btn btn-style-two"><span>Pay with Xendit</span></button>
                                                
                                            @endif
                                        </div>
                                    </form>
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

    {{-- <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.client_key') }}">
    </script>
    <script>
        const payButton = document.querySelector('#pay-button');
        payButton.addEventListener('click', function(e) {
            e.preventDefault();

            snap.pay('{{ $snapToken }}', {
                // Optional
                onSuccess: function(result) {
                    /* You may add your own js here, this is just example */
                    // document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                    console.log(result)
                },
                // Optional
                onPending: function(result) {
                    /* You may add your own js here, this is just example */
                    // document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                    console.log(result)
                },
                // Optional
                onError: function(result) {
                    /* You may add your own js here, this is just example */
                    // document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                    console.log(result)
                }
            });
        });
    </script> --}}

</x-app-layout>