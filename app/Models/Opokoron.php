<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Opokoron extends Model
{
    protected $table = 'opokorons';

    protected $fillable = [
        'name',
        'code',
        'quantity',
        'price',
        'description',
        'image'
    ];
}
