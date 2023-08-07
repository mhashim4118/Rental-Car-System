<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class VehicleOwner extends Model
{
    use HasFactory;
    protected $table = 'vehicles_owner';
    protected $fillable = [
        'name', 'phone', 'email', 'city'
    ];

    public function owner(): HasOne
    {
        return $this->hasOne(VehicleDetail::class);
    }
}
