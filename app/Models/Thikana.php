<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Thikana extends Model
{
    protected $table = 'thikanas';

    protected $fillable = [
        'office',
        'account_no'
    ];
}
