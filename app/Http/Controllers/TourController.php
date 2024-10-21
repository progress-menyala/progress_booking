<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\TourPackage;
use Illuminate\Http\Request;
use App\Models\TourPackage as Tour;
use App\Filament\Resources\TourPackageResource;
use App\Models\Booking;
use App\Models\Review;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tours = Tour::all();
        return view('frontpage.tours.index', compact('tours'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Tour $tour):View
    {
        $tours = TourPackage::all();
        $status = Booking::where('tour_package_id', $tour->id)->first();
        $review = Review::where('tour_package_id', $tour->id)
                ->orderBy('created_at', 'desc') // Urutkan berdasarkan yang terbaru
                ->take(5) // Ambil hanya 5 data
                ->get();
        $averageRating = Review::where('tour_package_id', $tour->id)->avg('rating');
        return view('frontpage.tours.detail',compact('tour', 'tours', 'status', 'review', 'averageRating'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tour $tour)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tour $tour)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tour $tour)
    {
        //
    }

    public function reviewSend(Request $request, Tour $tour)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'rating' => 'required',
            'tour_package_id'=> 'required',
            'message' => 'required',
        ]);


        Review::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'rating' => $validated['rating'],
            'tour_package_id' => $validated['tour_package_id'],
            'message' => $validated['message'],
        ]);

        return redirect()->back()->with('success','Comment Added');
        
    }
}
