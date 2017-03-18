<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SasthoProduct extends Model
{
    protected $table = 'sastho_products';

    protected $fillable = [
        'name',
        'code',
        'quantity',
        'price',
        'description',
        'image'
    ];
}
