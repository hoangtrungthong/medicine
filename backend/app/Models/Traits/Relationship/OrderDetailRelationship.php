<?php

namespace App\Models\Traits\Relationship;

use App\Models\Order;
use App\Models\Product;
use App\Models\User;

/**
 * Class OrderDetailRelationship.
 */
trait OrderDetailRelationship
{
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
