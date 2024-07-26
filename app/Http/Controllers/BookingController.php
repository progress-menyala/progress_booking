<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\TourPackage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        // dd($checkout);
        $tour = TourPackage::find($id);
        return view('frontpage.booking.cart', [
            'tour' => $tour
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all()); 
        $code = Str::random(5);  
        $request->validate([
            'tour_package_id' => 'required',
        ]);

        $booking = Booking::create([
            'user_id' => $request->user_id ?? null,
            'tour_package_id' => $request->tour_package_id,
            'payment_method_id' => $request->payment_method_id ?? null,
            'booking_date' => now(),
            'status' => 'hold',
            'total' => $request->total ?? null,
            'code' => $code, // Unique code
            'customer_email' => $request->customer_email ?? null,
            'customer_name' => $request->customer_name ?? null,
            'customer_id' => $request->customer_id ?? null,
            'phone_number' => $request->phone_number ?? null,
            'expired_at' => now()->addDays(3), // Set expiration date
            'sub_total' => $request->sub_total ?? null,
            'admin_fee' => $request->admin_fee ?? null,
            'payment_fee' => $request->payment_fee ?? null,
            'tax' => $request->tax ?? null,
            'grand_total' => $request->grand_total ?? null,
            'voucher' => $request->voucher ?? null,
            'snap_token' => $request->snap_token ?? null,
        ]);

        return redirect()->route('checkout.payment', ['id' => $booking->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function payment($id)
    {
        $booking = Booking::find($id);
        $tour_package = TourPackage::find($booking->tour_package_id);
        return view('frontpage.booking.checkout', [
            'booking' => $booking,
            'tour' => $tour_package
        ]);
    }
}
