<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MoslaBij extends Model
{
    protected $table = 'mosla_bijs';

    protected $fillable = [
        'name',
        'code',
        'quantity',
        'price',
        'description',
        'image'
    ];
}
