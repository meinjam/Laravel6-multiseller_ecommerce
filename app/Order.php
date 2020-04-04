<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function items()
    {
        return $this->belongsToMany('App\Product', 'order_items', 'order_id', 'product_id');
    }
}
