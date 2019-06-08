<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    protected $fillable = [
        'name',
        'description',
        'phone',
        'isActive',
        'city_id',
        'area_id',
    ];

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function getCityName()
    {
        return $this->city->name;
    }

    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    public function getAreaName()
    {
        return $this->area->name;
    }
}
