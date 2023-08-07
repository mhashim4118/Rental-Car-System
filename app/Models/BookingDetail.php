<?php

namespace App\Models;

use App\Models\Booking;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BookingDetail extends Model
{
    use HasFactory;
    protected $table = 'booking_details';
    // protected $fillable = [
    //     'name',
    //     'phone', 
    //     'email',
       
    // ];
    // function booking(){
    //     return $this->belongsTo(Booking::class);
    // }
}
