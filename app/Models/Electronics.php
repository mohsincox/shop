<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Electronics extends Model
{
    protected $table = 'electronics';

    protected $fillable = [
        'name',
        'code',
        'quantity',
        'price',
        'description',
        'image'
    ];
}
