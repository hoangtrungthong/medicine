<?php

namespace App\Models\Traits\Relationship;

use App\Models\Order;
use App\Models\User;

/**
 * Class PaymentRelationship.
 */
trait PaymentRelationship
{
    public function order()
    {
        return $this->hasMany(Order::class);
    }
}
