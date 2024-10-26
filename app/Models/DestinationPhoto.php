<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DestinationPhoto extends Model
{
    use HasFactory;

    protected $fillable = [
        'destination_id',
        'photo_url',
    ];

    protected $casts = [
        'photo_url' => 'array',
    ];

    public function destination()
    {
        return $this->belongsTo(Destination::class);
    }
}

