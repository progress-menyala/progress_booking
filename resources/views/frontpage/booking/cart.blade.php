<x-app-layout>
    @include('components.banner', ['title' => 'Cart', 'subtitle' => 'Form'])    

    <!--Cart Section-->
    {{-- @dd(auth()->us er()) --}}
    <section class="cart-section">
        <div class="auto-container">
            <!--Cart Outer-->
            <div class="cart-outer">
                <div class="table-outer">
                    <div class="table-box">
                        <table class="cart-table">
                            <thead class="cart-header">
                                <tr>
                                    <th>&nbsp;</th>
                                    <th class="prod-column">Product</th>
                                    <th class="price">Price</th>
                                    <th>Checkout</th>
                                  
                                </tr>
                            </thead>
                            
                            <tbody>
                                <tr>
                                    <td colspan="2" class="prod-column">
                                        <div class="column-box">
                                            <figure class="prod-thumb"><a href="/tours/{{ $tour->id }}"><img src="{{ asset('storage/images/resource/shop/s-cart-thumb.jpg') }}" alt=""></a></figure>
                                            <h4 class="prod-title">{{ $tour->name }}</h4>
                                            <p>Date : {{ $tour->date }}</p>
                                            <p>Description : {{ $tour->description }}</p>
                                        </div>
                                    </td>
                                    <td class="price">Rp. {{ $tour->price }}</td>
                                    <td colspan="2" class="prod-column justify-content-start">
                                        <form action="{{ route('checkout.store', ['id' => $tour->id]) }}" method="post">
                                            @csrf
                                            <input type="hidden" name="tour_package_id" value="{{ $tour->id ?? '' }}">
                                            <input type="hidden" name="payment_method_id" value="{{ $paymentMethod->id ?? '' }}">
                                            <input type="hidden" name="booking_date" value="{{ $bookingDate ?? '' }}">
                                            <input type="hidden" name="total" value="{{ $total ?? '' }}">
                                            <button type="submit" class="theme-btn btn-style-two"><span>Checkout</span></button>
                                        </form>    
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                
                    {{-- <div class="coupon-outer">
                        <div class="content-box clearfix">
                            <div class="apply-coupon clearfix">
                                <div class="form-group clearfix">
                                    <input type="text" name="coupon-code" value="" placeholder="Apply coupon">
                                </div>
                                <div class="form-group clearfix">
                                    <button type="button" class="theme-btn coupon-btn btn-style-two"><span class="btn-title">Apply Coupon</span></button>
                                </div>
                            </div>
                            <div class="link-box">
                                <button type="button" class="theme-btn cart-btn"><span>Update Cart</span></button>
                            </div>
                        </div>
                    </div> --}}
                </div>

                {{-- <div class="totals-column clearfix">
                    <div class="inner">
                        <div class="cart-total">
                            <h3 class="title">Cart Totals</h3>
                            <!--Totals Table-->
                            <ul class="totals-table">
                                <li class="clearfix"><span class="col col-title">Total</span><span class="col total-price">Rp. {{ $tour->price }}</span></li>
                                <li class="clearfix"></li>
                            </ul>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <!-- End Cart Section-->
</x-app-layout>