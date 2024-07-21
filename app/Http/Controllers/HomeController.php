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
        $destination = Destination::all();
        $featured_tour = FeaturedTour::with('tourPackage')->get();

        return view('home', [
            'destinations' => $destination,
            'featured' => $featured_tour
        ]);
    }
}
