<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductTag extends Model
{
    protected $table = 'product_tags';

    protected $fillable = [
        'id',
        'product_id',
        'tag_id',
        'created_at',
    ];

    protected $casts = [
        'created_at' => 'datetime',
    ];
}
