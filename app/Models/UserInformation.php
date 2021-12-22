<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInformation extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'ncard_number',
        'father_name',
        'mother_name',
        'address',
        'date_of_birth',
        'p_identity',
        'gender',
    ];

    function relationBetweenUser()
      {
      return $this->hasOne('App\Models\User','id','name');
      }
}
