<?php

namespace App\Models\Traits\Relationship;

use App\Models\ProductPatch;

/**
 * Class SupplierRelationship.
 */
trait SupplierRelationship
{
    public function productPatchs()
    {
        return $this->hasMany(ProductPatch::class);
    }
}
