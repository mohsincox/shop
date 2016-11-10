<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Osodhi extends Model
{
    protected $table = 'osodhis';

    protected $fillable = [
        'name',
        'code',
        'quantity',
        'price',
        'description',
        'image'
    ];
}
