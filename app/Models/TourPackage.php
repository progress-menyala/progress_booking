<?php

namespace App\Models;

use App\Models\OrganizerProfile;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TourPackage extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function organizer_profiles()
    {
        return $this->belongsTo(OrganizerProfile::class);
    }
}
