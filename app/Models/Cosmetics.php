<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cosmetics extends Model
{
    protected $table = 'cosmetics';

    protected $fillable = [
        'name',
        'code',
        'quantity',
        'price',
        'description',
        'image'
    ];
}
