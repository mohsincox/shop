<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProyojonOnnanno extends Model
{
    protected $table = 'proyojon_onnannos';

    protected $fillable = [
        'name',
        'code',
        'quantity',
        'price',
        'description',
        'image'
    ];
}
