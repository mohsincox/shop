<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kaktas extends Model
{
    protected $table = 'kaktas';

    protected $fillable = [
        'name',
        'code',
        'quantity',
        'price',
        'description',
        'image'
    ];
}
