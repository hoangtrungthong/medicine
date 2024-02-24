<?php

namespace App\Models;

use App\Models\Traits\Attribute\SupplierAttribute;
use App\Models\Traits\Method\SupplierMethod;
use App\Models\Traits\Relationship\SupplierRelationship;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Supplier extends Model
{
    use HasFactory, SoftDeletes, SupplierMethod, SupplierAttribute, SupplierRelationship;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'province_id',
        'ward_id',
        'district_id',
        'name',
        'email',
        'phone',
        'address',
        'note',
    ];
}
