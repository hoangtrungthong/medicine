<?php

namespace App\Models;

use App\Models\Traits\Attribute\ProductAttribute;
use App\Models\Traits\Method\ProductMethod;
use App\Models\Traits\Relationship\ProductRelationship;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes, ProductMethod, ProductAttribute, ProductRelationship;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'category_id',
        'unit_id',
        'name',
        'code',
        'slug',
        'description',
        'specification',
        'ingredients',
        'type',
        'quantity',
        'amount',
        'effects',
    ];
}
