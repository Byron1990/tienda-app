<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'Products';
    protected $fillable = [
        'cate_id',
        'name',
        'slug',
        'small_description',
        'description',
        'original_price',
        'selling_price',
        'image',
        /* 'qty', */
        'tax',
        'status',
        'trending',
        'meta_title',
        'meta_keywords',
        'meta_description'
    ];

    /* Extraer la categoria correcpondiente a un determinado producto */
    public function category()
    {
        return $this->belongsTo(Category::class, 'cate_id', 'id');
    }
}
