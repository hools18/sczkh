<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Claim extends Model
{
    protected $fillable = [
        'country_id',
        'region_id',
        'city_id',
        'area_id',
        'street',
        'house',
        'entrance',
        'floor',
        'apartment',
        'place_description',
        'category_claim_id',
        'title',
        'text_claim',
        'status',
        'sender_id',
        'city_operator',
        'area_operator',
        'worker_id',
    ];
}
