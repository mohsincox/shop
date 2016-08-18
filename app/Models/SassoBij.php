<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SassoBij extends Model
{
    protected $table = 'sasso_bijs';

    protected $fillable = [
        'name',
        'code',
        'quantity',
        'price',
        'description',
        'image'
    ];
}
