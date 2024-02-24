<?php

namespace App\Models\Traits\Relationship;

use App\Models\Product;

/**
 * Class CategoryRelationship.
 */
trait CategoryRelationship
{
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
