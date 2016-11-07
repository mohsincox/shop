<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KrishiKhaddo extends Model
{
    protected $table = 'krishi_khaddos';

    protected $fillable = [
        'name',
        'code',
        'quantity',
        'price',
        'description',
        'image'
    ];
}
