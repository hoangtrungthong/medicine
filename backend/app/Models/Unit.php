<?php

namespace App\Models;

use App\Models\Traits\Attribute\UnitAttribute;
use App\Models\Traits\Method\UnitMethod;
use App\Models\Traits\Relationship\UnitRelationship;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Unit extends Model
{
    use HasFactory, SoftDeletes, UnitMethod, UnitAttribute, UnitRelationship;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
    ];
}
