<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['product_type_id', 'name', 'description', 'price'];

    public function productType()
    {
        return $this->belongsTo(ProductType::class, 'product_type_id', 'id');
    }
}
