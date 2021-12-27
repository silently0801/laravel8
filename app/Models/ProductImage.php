<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    use HasFactory;
    protected $table = 'product_images';

    protected $fillable = ['product_id','image_url'];

    public function product()
    {
        return $this->belongsTo(Product::class,'product_id','id');
    }
}
