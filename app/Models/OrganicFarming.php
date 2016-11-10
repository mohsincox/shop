<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrganicFarming extends Model
{
    protected $table = 'organic_farmings';

    protected $fillable = [
        'name',
        'code',
        'quantity',
        'price',
        'description',
        'image'
    ];
}
