<?php

namespace App\Http\Controllers;

use App\Models\OrganizerProfile;
use Illuminate\Http\Request;
use Illuminate\View\View;

class OrganizersController extends Controller
{
    
    public function index()
    {
        $organizers = OrganizerProfile::all();
        return view('frontpage.organizers.index',[
            'organizers' => $organizers
        ]);
    }

    public function show(OrganizerProfile $organizer, Request $request)
    {
        // dd($request->id);
        $org = OrganizerProfile::findOrFail($request->id);
        $orgs = OrganizerProfile::all();
        return view('frontpage.organizers.show', [
            'org' => $org,
            'orgs' =>$orgs
        ]);
    }
}
