<?php

namespace App\Models;

use App\Models\Traits\Attribute\PaymentAttribute;
use App\Models\Traits\Method\PaymentMethod;
use App\Models\Traits\Relationship\PaymentRelationship;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payment extends Model
{
    use HasFactory, SoftDeletes, PaymentMethod, PaymentAttribute, PaymentRelationship;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name'
    ];
}
