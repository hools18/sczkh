<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $fillable = [
        'name',
        'city_id',
        'region_id',
        'country_id',
        'isActive',
    ];
}
