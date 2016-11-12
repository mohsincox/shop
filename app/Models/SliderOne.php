<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SliderOne extends Model
{
    protected $table = 'slider_ones';

    protected $fillable = [
        'title_one',
        'title_two',
        'title_three',
        'image'
    ];
}
