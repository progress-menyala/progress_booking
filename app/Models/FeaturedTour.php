<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeaturedTour extends Model
{
    use HasFactory;
    protected $table = 'featured-tours';

    public function tourPackage()
    {
        return $this->belongsTo(TourPackage::class, 'tour_packages_id');
    }
}
