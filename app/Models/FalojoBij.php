<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FalojoBij extends Model
{
    protected $table = 'falojo_bijs';

    protected $fillable = [
        'name',
        'code',
        'quantity',
        'price',
        'description',
        'image'
    ];
}
