<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Hostel extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'hostel_name',
        'address',
        'room_type',
        'room_size',
        'utilities',
        'attached_toilet',
        'attached_varanda',
        'hot_water',
        'laundry',
        'ac',
        'cable_tv',
        'wifi',
        'lift',
        'furnished',
        'parking',
        'price',
        'photo',
    ];
}
