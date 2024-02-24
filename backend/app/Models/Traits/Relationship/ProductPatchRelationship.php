<?php

namespace App\Models\Traits\Relationship;

use App\Models\Product;
use App\Models\Supplier;

/**
 * Class ProductPatchRelationship.
 */
trait ProductPatchRelationship
{
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
}
