<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LabEquipment extends Model
{
    protected $table = 'lab_equipments';

    protected $fillable = [
        'name',
        'code',
        'quantity',
        'price',
        'description',
        'image'
    ];
}
