<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrganicVegetables extends Model
{
    protected $table = 'organic_vegetables';

    protected $fillable = [
        'name',
        'code',
        'quantity',
        'price',
        'description',
        'image'
    ];
}
