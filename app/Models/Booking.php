<?php

namespace App\Models;

use App\Models\User;
use App\Models\TourPackage;
use App\Models\PaymentMethod;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Booking extends Model
{
    protected $table = 'bookings';
    use HasFactory;
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tourPackage()
    {
        return $this->belongsTo(TourPackage::class);
    }

    public function paymentMethod()
    {
        return $this->belongsTo(PaymentMethod::class);
    }

    public function isExpired()
    {
        return $this->expired_at < now();
    }

    public function isFailed()
    {
        return $this->status === 'failed';
    }

    public function isValid()
    {
        return !$this->isExpired() && !$this->isFailed();
    }
}
