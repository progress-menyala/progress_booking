<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\DestinationPhoto;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $destinations = Destination::all();
        return view('frontpage.destination.index', [
            'destinations' => $destinations
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(Destination $destination)
    {
        // dd($destination);
        $destinationPhoto = DestinationPhoto::where('destination_id', $destination->id)->first();
        // dd($destinationPhoto);
        return view('frontpage.destination.show', [
            'destination' => $destination,
            'photos' => $destinationPhoto
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Destination $destination)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Destination $destination)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Destination $destination)
    {
        //
    }
}
