<?php

namespace App\Models\Traits\Relationship;

use App\Models\Product;

/**
 * Class DiscountRelationship.
 */
trait DiscountRelationship
{
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
