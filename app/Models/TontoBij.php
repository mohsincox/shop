<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TontoBij extends Model
{
    protected $table = 'tonto_bijs';

    protected $fillable = [
        'name',
        'code',
        'quantity',
        'price',
        'description',
        'image'
    ];
}
