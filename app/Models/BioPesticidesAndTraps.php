<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BioPesticidesAndTraps extends Model
{
    protected $table = 'bio_pesticides_and_traps';

    protected $fillable = [
        'name',
        'code',
        'quantity',
        'price',
        'description',
        'image'
    ];
}
