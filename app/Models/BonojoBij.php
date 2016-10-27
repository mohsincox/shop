<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BonojoBij extends Model
{
    protected $table = 'bonojo_bijs';

    protected $fillable = [
        'name',
        'code',
        'quantity',
        'price',
        'description',
        'image'
    ];
}
