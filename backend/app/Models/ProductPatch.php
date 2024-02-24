<?php

namespace App\Models;

use App\Models\Traits\Attribute\ProductPatchAttribute;
use App\Models\Traits\Method\ProductPatchMethod;
use App\Models\Traits\Relationship\ProductPatchRelationship;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductPatch extends Model
{
    use HasFactory, SoftDeletes, ProductPatchMethod, ProductPatchAttribute, ProductPatchRelationship;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'product_id',
        'supplier_id',
        'code',
        'quantity',
        'expired_date',
        'manufacture_date',
        'original_price',
        'retail_price',
        'description',
        'quantity',
    ];
}
