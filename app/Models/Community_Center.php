<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Community_Center extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'community_name',
        'address',
        'floor_level',
        'floor_size',
        'road_width',
        'utilities',
        'interior_condition',
        'fire_safety',
        'lift',
        'wifi',
        'garden',
        'cooking',
        'sitting',
        'parking',
        'price',
        'photo',
    ];
}
