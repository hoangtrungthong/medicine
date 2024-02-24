<?php

namespace App\Models\Traits\Relationship;

use App\Models\OrderDetail;
use App\Models\Payment;
use App\Models\User;

/**
 * Class OrderRelationship.
 */
trait OrderRelationship
{
    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }

    public function paymentMethod()
    {
        return $this->belongsTo(Payment::class);
    }
}
