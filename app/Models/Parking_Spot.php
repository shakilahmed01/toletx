<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Parking_Spot extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'address',
        'price',
        'floor_level',
        'floor_height',
        'vehicle_type',
        'description',        
        'photo',
    ];
}
