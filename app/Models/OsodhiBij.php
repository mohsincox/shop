<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OsodhiBij extends Model
{
    protected $table = 'osodhi_bijs';

    protected $fillable = [
        'name',
        'code',
        'quantity',
        'price',
        'description',
        'image'
    ];
}
