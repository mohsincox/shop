<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HostoShilpo extends Model
{
    protected $table = 'hosto_shilpos';

    protected $fillable = [
        'name',
        'code',
        'quantity',
        'price',
        'description',
        'image'
    ];
}
