<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Factory extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'factory_name',
        'address',
        'floor_level',
        'floor_size',
        'road_width',
        'utilities',
        'building_condition',
        'fire_safety',
        'lift',
        'interior_condition',
        'drainage_system',
        'parking',
        'price',
        'photo',
    ];
}
