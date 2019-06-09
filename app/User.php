<?php

namespace App;

use App\Models\CategoryClaim;
use App\Models\Role;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'firstname', 'lastname', 'patronymic', 'patronymic', 'role_id', 'app_id', 'device_id', 'category_claim_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class)->withDefault([
            'name' => 'Пользователь',
        ]);
    }

    public function category_claim()
    {
        return $this->belongsTo(CategoryClaim::class)->withDefault([
            'name' => ''
        ]);
    }

    public function getRoleName()
    {
        return $this->role->name;
    }

    public function getCategoryName()
    {
        return $this->category_claim->name;
    }
}

