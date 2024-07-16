<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // public function registerMediaCollections(): void
    // {
    //     $this->addMediaCollection('images')->useDisk('public')->singleFile();
    // }

    protected $casts = [
        'images' => 'array',
    ];

    public function user()
    {
        return $this->hasMany(User::class);
    }
}
