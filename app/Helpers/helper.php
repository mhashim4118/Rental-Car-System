<?php
namespace App\Helpers;

use App\Models\Booking;
use App\Models\setting;
use App\Models\Location;
use App\Models\UserDetail;
use App\Models\VehicleDetail;
use App\Models\Email;
use App\Models\VehicleOwner;
class Helper
{
    public static function site_logo()
    {
        return $record = setting::all();
    }
    public static function vehicle()
    {
        return $vehicle = VehicleDetail::all();
    }

    public static function locationget()
    {
        return $loc = Location::all();
    }

    public static function userstatus()
    {
        return $ud = UserDetail::all();
    }
    public static function booking()
    {
        return $booking = Booking::all();
    }
    public static function vehicleowner()
    {
        return $vowner = VehicleOwner::all();
    }
}
