<?php

namespace App\Models;

use App\Models\Traits\Attribute\OrderDetailAttribute;
use App\Models\Traits\Method\OrderDetailMethod;
use App\Models\Traits\Relationship\OrderDetailRelationship;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderDetail extends Model
{
    use HasFactory, SoftDeletes, OrderDetailMethod, OrderDetailAttribute, OrderDetailRelationship;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'product_id',
        'order_id',
        'price',
    ];
}
