<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrganizerProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'user_id',
        'email',
        'phone',
        'address',
        'city',
        'state',
        'zip',
        'country',
        'website',
        'facebook',
        'twitter',
        'linkedin',
        'instagram',
        'youtube',
        'about',
        'image',
    ];  

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
