<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    protected $fillable = [
        'name',
        'city',
        'area',
        'street',
        'house',
        'additional_information'
    ];
}
