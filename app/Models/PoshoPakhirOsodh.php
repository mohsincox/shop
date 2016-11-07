<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PoshoPakhirOsodh extends Model
{
    protected $table = 'posho_pakhir_osodhs';

    protected $fillable = [
        'name',
        'code',
        'quantity',
        'price',
        'description',
        'image'
    ];
}
