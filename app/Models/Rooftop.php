<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Rooftop extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'address',
        'floor_area',
        'utilities',
        'protection',
        'lift',
        'interior_condition',
        'shed',
        'parking',
        'price',
        'photo',

    ];
}
