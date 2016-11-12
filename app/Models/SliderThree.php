<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SliderThree extends Model
{
    protected $table = 'slider_threes';

    protected $fillable = [
        'title_one',
        'title_two',
        'title_three',
        'image'
    ];
}
