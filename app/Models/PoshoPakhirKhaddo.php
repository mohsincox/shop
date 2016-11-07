<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PoshoPakhirKhaddo extends Model
{
    protected $table = 'posho_pakhir_khaddos';

    protected $fillable = [
        'name',
        'code',
        'quantity',
        'price',
        'description',
        'image'
    ];
}
