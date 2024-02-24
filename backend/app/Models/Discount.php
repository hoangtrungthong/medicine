<?php

namespace App\Models;

use App\Models\Traits\Attribute\DiscountAttribute;
use App\Models\Traits\Method\DiscountMethod;
use App\Models\Traits\Relationship\DiscountRelationship;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Discount extends Model
{
    use HasFactory, SoftDeletes, DiscountMethod, DiscountAttribute, DiscountRelationship;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'product_id',
        'start_date',
        'end_date',
        'quantity',
        'status',
        'price',
        'description',
    ];
}
