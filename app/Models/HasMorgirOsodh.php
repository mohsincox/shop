<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HasMorgirOsodh extends Model
{
    protected $table = 'has_morgir_osodhs';

    protected $fillable = [
        'name',
        'code',
        'quantity',
        'price',
        'description',
        'image'
    ];
}
