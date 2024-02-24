<?php

namespace App\Models;

use App\Models\Traits\Attribute\OrderAttribute;
use App\Models\Traits\Method\OrderMethod;
use App\Models\Traits\Relationship\OrderRelationship;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory, SoftDeletes, OrderMethod, OrderAttribute, OrderRelationship;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'payment_method_id',
        'province_id',
        'ward_id',
        'district_id',
        'status',
        'amount',
        'phone',
        'address',
    ];
}
