<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable=['user_id','item','amount','emerald','turquoise','banquet','child','name','phone','email','paypal','status'];
}
