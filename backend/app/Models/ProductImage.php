<?php

namespace App\Models;

use App\Models\Traits\Attribute\ProductImageAttribute;
use App\Models\Traits\Method\ProductImageMethod;
use App\Models\Traits\Relationship\ProductImageRelationship;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductImage extends Model
{
    use HasFactory, SoftDeletes, ProductImageMethod, ProductImageAttribute, ProductImageRelationship;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'product_id',
        'path',
    ];
}
