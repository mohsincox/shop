<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SliderTwo extends Model
{
    protected $table = 'slider_twos';

    protected $fillable = [
        'title_one',
        'title_two',
        'title_three',
        'image'
    ];
}
