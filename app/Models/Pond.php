<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Pond extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'address',
        'purpose',
        'water_level',
        'pond_area',
        'purpose',
        'road_width',
        'drainage_system',
        'price',
        'photo',
    ];
}
