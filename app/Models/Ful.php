<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ful extends Model
{
    protected $table = 'fuls';

    protected $fillable = [
        'name',
        'code',
        'quantity',
        'price',
        'description',
        'image'
    ];
}
