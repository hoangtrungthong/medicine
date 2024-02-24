<?php

namespace App\Models\Traits\Relationship;

use App\Models\Product;

/**
 * Class UnitRelationship.
 */
trait UnitRelationship
{
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
