<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Telecom extends Model
{
    protected $table = 'telecoms';

    protected $fillable = [
        'name',
        'code',
        'quantity',
        'price',
        'description',
        'image'
    ];
}
