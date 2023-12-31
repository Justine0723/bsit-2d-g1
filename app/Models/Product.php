<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'category',
        'branch',
        'price',
        'unit',
        'in_stock',
        'on_order',
        'is_visible',
        'image'
    ];
}
