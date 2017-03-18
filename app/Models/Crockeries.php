<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Crockeries extends Model
{
    protected $table = 'crockeries';

    protected $fillable = [
        'name',
        'code',
        'quantity',
        'price',
        'description',
        'image'
    ];
}
