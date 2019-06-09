<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Claim extends Model implements HasMedia
{
    use HasMediaTrait;

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
        'user_email',
        'user_phone',
        'device_id',
        'browser_hash',
        'date_expired',
        'system_status',
    ];

    public function city()
    {
        return $this->belongsTo(City::class)->withDefault([
            'name' => 'не указан',
        ]);
    }

    public function region()
    {
        return $this->belongsTo(Region::class)->withDefault([
            'name' => 'не указан',
        ]);
    }

    public function area()
    {
        return $this->belongsTo(Area::class)->withDefault([
            'name' => 'не указан',
        ]);
    }

    public function sender()
    {
        return $this->belongsTo(User::class, 'sender_id', 'id');
    }

    public function worker()
    {
        return $this->belongsTo(Worker::class);
    }

    public function getWorkerName()
    {
        return $this->worker->name;
    }

    public function getCityName()
    {
        return $this->city->name;
    }

    public function getAreaName()
    {
        return $this->area->name;
    }

    public function category_claim()
    {
        return $this->belongsTo(CategoryClaim::class)->withDefault([
            'name' => 'не указана',
        ]);
    }

    public function getCategoryName()
    {
        return $this->category_claim->name;
    }
}
