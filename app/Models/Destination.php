<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'slug',
        'location',
        'capacity',
        'description',
        'maps',
        'featured_image', 
        'images',
        'opening_hours',
        'status',
        'contact_info',
    ];

    protected $casts = [
        'images' => 'array',
    ];

    public function user()
    {
        return $this->hasMany(User::class);
    }

    public function photos()
    {
        return $this->hasMany(DestinationPhoto::class);
    }
    
    public function rules()
    {
        return [
            'image' => 'required|image',
        ];
    }
}
