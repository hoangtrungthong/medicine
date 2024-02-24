<?php

namespace App\Models;

use App\Models\Traits\Attribute\CategoryAttribute;
use App\Models\Traits\Method\CategoryMethod;
use App\Models\Traits\Relationship\CategoryRelationship;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes, CategoryMethod, CategoryAttribute, CategoryRelationship;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'code',
        'slug',
        'description',
    ];
}
