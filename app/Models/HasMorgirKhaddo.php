<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HasMorgirKhaddo extends Model
{
    protected $table = 'has_morgir_khaddos';

    protected $fillable = [
        'name',
        'code',
        'quantity',
        'price',
        'description',
        'image'
    ];
}
