<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MotsoOsodh extends Model
{
    protected $table = 'motso_osodhs';

    protected $fillable = [
        'name',
        'code',
        'quantity',
        'price',
        'description',
        'image'
    ];
}
