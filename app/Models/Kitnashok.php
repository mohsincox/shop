<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kitnashok extends Model
{
    protected $table = 'kitnashoks';

    protected $fillable = [
        'name',
        'code',
        'quantity',
        'price',
        'description',
        'image'
    ];
}
