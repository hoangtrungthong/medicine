<?php

namespace App\Models;

use App\Models\Traits\Attribute\RoleAttribute;
use App\Models\Traits\Method\RoleMethod;
use App\Models\Traits\Relationship\RoleRelationship;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use HasFactory, SoftDeletes, RoleMethod, RoleAttribute, RoleRelationship;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
    ];
}
