<x-app-layout>
    @include('components.banner', ['title' => 'Cart', 'subtitle' => 'Form'])    

    <!--Cart Section-->
    {{-- @dd(auth()->user()) --}}
    <section class="cart-section">
        <div class="auto-container">
            <!--Cart Outer-->
            {{-- @dd(auth()->user()) --}}
            <div class="cart-outer">
                <div class="table-outer">
                    <div class="table-box">
                        <table class="cart-table">
                            <thead class="cart-header">
                                <tr>
                                    <th>&nbsp;</th>
                                    <th class="prod-column">Product</th>
                                    <th class="price">Price</th>
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

                <div class="totals-column clearfix">
                    <div class="inner">
                        <div class="cart-total">
                            <h3 class="title">Cart Totals</h3>
                            <!--Totals Table-->
                            <form action="{{ route('checkout.store', ['id' => $tour->id]) }}" method="post">
                                @csrf
                                <ul class="totals-table">
                                    <div x-data="{
                                        price: {{ $tour->price }},
                                        fee: 0.05,
                                        tax: 0.11,
                                        adminfee: 0.02,
                                        get total() {
                                            return this.price + (this.price * this.fee) + (this.price * this.tax) + (this.price * this.adminfee);
                                        }
                                    }">
                                        <li class="clearfix">
                                            <span class="col col-title">Price</span>
                                            <span class="col total-price">Rp. <span x-text="price.toFixed(2)"></span></span>
                                        </li>
                                        <li class="clearfix">
                                            <span class="col col-title">Fee Payment</span>
                                            <span class="col total-price">5%</span>
                                            <input type="hidden" value="5" readonly name="payment_fee" >
                                        </li>
                                        <li class="clearfix">
                                            <span class="col col-title">Admin Payment</span>
                                            <span class="col total-price">2%</span>
                                            <input type="hidden" value="2" readonly name="admin_fee" >
                                        </li>
                                        <li class="clearfix">
                                            <span class="col col-title">Tax</span>
                                            <span class="col total-price">11%</span>
                                            <input type="hidden" value="11" readonly name="tax" >
                                        </li>
                                        <li class="clearfix">
                                            <span class="col col-title">Total</span>
                                            <span class="col total-price">
                                                Rp. <span x-text="total.toFixed(2)"></span>
                                                <input type="hidden" x-model="total" readonly name="grand_total" >
                                            </span>
                                        </li>
                                    </div>
                                    
                                    <li class="clearfix"></li>
                                </ul>
                                <div x-data="{
                                    code: '',
                                    generateRandomCode() {
                                        let code = '';
                                        for (let i = 0; i < 5; i++) {
                                            const randomDigit = Math.floor(Math.random() * 10);
                                            code += randomDigit;
                                        }
                                        this.code = code;
                                    }
                                }" x-init="generateRandomCode()">
                                <input type="hidden" name="code" x-bind:value="code">
                                <input type="hidden" name="sub_total" value="{{ $tour->price }}">
                                <input type="hidden" name="tour_package_id" value="{{ $tour->id ?? '' }}">
                                <input type="hidden" name="payment_method_id" value="{{ $paymentMethod->id ?? '' }}">
                                <input type="hidden" name="booking_date" value="{{ $bookingDate ?? now() }}">
                                <button type="submit" class="theme-btn btn-style-two"><span>Checkout</span></button>
                            </form> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Cart Section-->
</x-app-layout>