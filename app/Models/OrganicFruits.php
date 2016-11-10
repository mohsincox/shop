<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrganicFruits extends Model
{
    protected $table = 'organic_fruits';

    protected $fillable = [
        'name',
        'code',
        'quantity',
        'price',
        'description',
        'image'
    ];
}
