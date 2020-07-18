<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    //

    protected $table = 'coupons';

    protected $fillable = [
        'name',
        'code',
        'type',
        'amount',
        'minimum_amount',
        'uses_per_customer',
        'count',
        'free_shipping',
        'created_by',
        'start_date',
        'end_date',
    ];
}
