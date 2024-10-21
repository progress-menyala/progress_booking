<?php

namespace App\Http\Controllers;

use App\Models\OrganizerProfile;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $organizers = OrganizerProfile::all();
        return view('frontpage.about.index', compact('organizers'));
    }
    public function faq()
    {
        return view('frontpage.about.faq');
    }
}
