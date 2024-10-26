<?php

namespace App\Models;

use App\Models\OrganizerProfile;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TourPackage extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "organizer_profiles_id",
        "price",
        "date",
        "facilities",
        "description",
        "image"
    ];

    protected $casts = [
        'image' => 'array',
    ];

    public function organizer_profiles()
    {
        return $this->belongsTo(OrganizerProfile::class);
    }

    public function featuredTours()
    {
        return $this->hasMany(FeaturedTour::class, 'tour_packages_id');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
