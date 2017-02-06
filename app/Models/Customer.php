<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';

    protected $fillable = [
        'customer_name',
        'product_name',
        'quantity',
        'mobile',
        'pay_info',
        'order_date',
        'delivery_date',
        'address'
    ];
}
