<?php

namespace App\Models\Traits\Relationship;

use App\Models\Product;

/**
 * Class ProductImageRelationship.
 */
trait ProductImageRelationship
{
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
