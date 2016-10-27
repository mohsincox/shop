<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FulBij extends Model
{
    protected $table = 'ful_bijs';

    protected $fillable = [
        'name',
        'code',
        'quantity',
        'price',
        'description',
        'image'
    ];
}
