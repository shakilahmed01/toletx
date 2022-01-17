<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Bilboard extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [

        'address',
        'type',
        'size',
        'hieght',
        'electricity',
        'price',
        'photo',
    ];
}
