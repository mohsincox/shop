<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Marquee extends Model
{
    protected $table = 'marquees';

    protected $fillable = ['image'];
}
