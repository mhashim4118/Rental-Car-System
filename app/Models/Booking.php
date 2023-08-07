<?php

namespace App\Models;

use App\Models\UserDetail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Booking extends Model
{
    use HasFactory;
    protected $table = 'bookings';
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    function detail(){
        return $this->hasOne(BookingDetail::class);
    }
}
