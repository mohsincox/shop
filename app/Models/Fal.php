<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fal extends Model
{
    protected $table = 'fals';

    protected $fillable = [
        'name',
        'code',
        'quantity',
        'price',
        'description',
        'image'
    ];
}
