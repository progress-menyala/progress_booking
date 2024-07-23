<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\TourPackage;
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
        $request->validate([
            'tour_package_id' => 'required',
        ]);

        Booking::create([
            'user_id' => auth()->id(),
            'tour_package_id' => $request->tour_package_id ?? null,
            'payment_method_id' => $request->payment_method_id ?? null,
            'booking_date' => now(),
            'status' => 'hold',
            'total' => $request->total ?? null,
        ]);

        return redirect()->route('checkout.payment');
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
        return view('frontpage.booking.checkout', [
            'booking' => TourPackage::find($id)
        ]);
    }
}
