<?php

namespace App\Models;

use App\Models\VehicleOwner;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class VehicleDetail extends Model
{
    use HasFactory;
    protected $table = 'vehicles_details';
    protected $fillable = [
        'model', 'description', 'price', 'image','plate_no','engine_capacity','year_of_manufacture',
    ];


    public function owner(): BelongsTo
    {
        return $this->belongsTo(VehicleOwner::class);
    }

    
}
