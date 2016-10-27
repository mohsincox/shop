<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Postika extends Model
{
    protected $table = 'postikas';

    protected $fillable = [
        'name',
        'code',
        'quantity',
        'price',
        'description',
        'image'
    ];
}
