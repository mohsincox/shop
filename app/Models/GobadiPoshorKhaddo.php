<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GobadiPoshorKhaddo extends Model
{
    protected $table = 'gobadi_poshor_khaddos';

    protected $fillable = [
        'name',
        'code',
        'quantity',
        'price',
        'description',
        'image'
    ];
}
