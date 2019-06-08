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

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function getCityName()
    {
        return $this->city->name;
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function getCountryName()
    {
        return $this->country->name;
    }

    public function region()
    {
        return $this->belongsTo(Region::class);
    }
    public function getRegionName()
    {
        return $this->region->name;
    }
}
