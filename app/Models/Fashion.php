<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fashion extends Model
{
    protected $table = 'fashions';

    protected $fillable = [
        'name',
        'code',
        'quantity',
        'price',
        'description',
        'image'
    ];
}
