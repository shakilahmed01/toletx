<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Shooting_Spot extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'shooting_name',
        'address',
        'floor_level',
        'floor_size',
        'road_width',
        'utilities',
        'building_condition',
        'fire_safety',
        'lift',
        'wifi',
        'garden',
        'cooking',
        'sitting',
        'parking',
        'vegetations',
        'price',
        'photo',
    ];
}
