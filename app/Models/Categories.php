<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Categories extends Model
{
    use HasFactory;

    protected $fillable = ['category_name', 'description'];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_category_details', 'category_id', 'product_id');
    }
}
