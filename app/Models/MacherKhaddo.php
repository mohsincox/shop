<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MacherKhaddo extends Model
{
    protected $table = 'macher_khaddos';

    protected $fillable = [
        'name',
        'code',
        'quantity',
        'price',
        'description',
        'image'
    ];
}
