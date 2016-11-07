<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ToilBij extends Model
{
    protected $table = 'toil_bijs';

    protected $fillable = [
        'name',
        'code',
        'quantity',
        'price',
        'description',
        'image'
    ];
}
