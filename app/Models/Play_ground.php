<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Play_ground extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'address',
        'type',
        'utilities',
        'attached_toilet',
        'laundry',
        'change_room',
        'wifi',
        'furnished',
        'ac',
        'parking',
        'dining',
        'spa',
        'gym',
        'sports',
        'swimmingpool',
        'price',
        'photo',
    ];
}
