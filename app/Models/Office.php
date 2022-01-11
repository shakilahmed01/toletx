<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Office extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'address',
        'floor_level',
        'floor_size',
        'road_width',
        'utilities',
        'interior_condition',
        'fire_safety',
        'lift',
        'emergency_lift',
        'parking',
        'price',
        'photo',
    ];
}
