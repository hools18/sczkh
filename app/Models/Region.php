<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $fillable = [
        'name',
        'country_id',
        'isActive',
    ];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
    public function getCountryName()
    {
        return $this->country->name;
    }
}
