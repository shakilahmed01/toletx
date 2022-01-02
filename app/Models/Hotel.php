<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Hotel extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'hotel_name',
        'location',
        'wifi',
        'bathroom',
        'cctv',
        'lift',
        'furnished',
        'security',
        'parking',
        'price',
        'guest_count',
        'photo',
    ];
}
