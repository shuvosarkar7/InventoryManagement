<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'product_type_id',
        'category_id',
        'name',
        'desc',
        'date',
        'modified_at',
        'deleted_at',
        'in_deleted'
    ];
    protected $table = "products";
}
