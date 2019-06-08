<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryClaim extends Model
{
    protected $fillable = [
        'name',
        'isActive',
    ];
}
