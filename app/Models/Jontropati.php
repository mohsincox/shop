<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jontropati extends Model
{
    protected $table = 'jontropatis';

    protected $fillable = [
        'name',
        'code',
        'quantity',
        'price',
        'description',
        'image'
    ];
}
