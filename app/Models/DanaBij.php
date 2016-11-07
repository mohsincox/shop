<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DanaBij extends Model
{
    protected $table = 'dana_bijs';

    protected $fillable = [
        'name',
        'code',
        'quantity',
        'price',
        'description',
        'image'
    ];
}
