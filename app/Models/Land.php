<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Land extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'address',
        'land_area',
        'vegetations',
        'road_width',
        'price',
        'photo',
    ];
}
