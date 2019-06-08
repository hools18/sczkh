<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = [
        'name',
        'region_id',
        'country_id',
        'isActive',
    ];

    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    public function getRegionName()
    {
        return $this->region->name;
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function getCountryName()
    {
        return $this->country->name;
    }
}
