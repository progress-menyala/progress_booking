<?php

namespace App\Http\Controllers;

use App\Models\OrganizerProfile;
use Illuminate\Http\Request;
use Illuminate\View\View;

class OrganizersController extends Controller
{
    
    public function index()
    {
        return view('frontpage.organizers.index');
    }

    public function show(OrganizerProfile $organizer):View
    {
        // dd($organizer);
        return view('frontpage.organizers.show');
    }
}
