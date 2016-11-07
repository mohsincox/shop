<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GobadiPoshorOsodh extends Model
{
    protected $table = 'gobadi_poshor_osodhs';

    protected $fillable = [
        'name',
        'code',
        'quantity',
        'price',
        'description',
        'image'
    ];
}
