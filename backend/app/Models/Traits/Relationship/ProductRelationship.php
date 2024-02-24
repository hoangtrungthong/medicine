<?php

namespace App\Models\Traits\Relationship;

use App\Models\Category;
use App\Models\Discount;
use App\Models\OrderDetail;
use App\Models\ProductImage;
use App\Models\ProductPatch;
use App\Models\Unit;

/**
 * Class ProductRelationship.
 */
trait ProductRelationship
{
    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function patchs()
    {
        return $this->hasMany(ProductPatch::class);
    }

    public function discounts()
    {
        return $this->hasMany(Discount::class);
    }

    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }
}
