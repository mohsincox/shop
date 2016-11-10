<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bonoj extends Model
{
    protected $table = 'bonojs';

    protected $fillable = [
        'name',
        'code',
        'quantity',
        'price',
        'description',
        'image'
    ];
}
