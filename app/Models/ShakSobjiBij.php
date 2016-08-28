<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShakSobjiBij extends Model
{
    protected $table = 'shak_sobji_bij';

    protected $fillable = [
        'name',
        'code',
        'quantity',
        'price',
        'description',
        'image'
    ];
}
