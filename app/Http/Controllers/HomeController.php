<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\TourPackage;
use App\Models\FeaturedTour;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $destinations = Destination::all();
        $featured_tours = FeaturedTour::with('tourPackage')->get();

        // dd($destinations, $featured_tours);

        return view('dashboard', [
            'destinations' => $destinations,
            'featured' => $featured_tours
        ]);
    }
}
