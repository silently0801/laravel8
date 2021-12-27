<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table='products';

    protected $fillable = ['name','description','price','image_url','product_category_id'];

    public function productCategory()
    {
        return $this->belongsTo(ProductCategory::class,'product_category_id','id');
    }
    
    public function productImages()
    {
        return $this->hasMany(ProductImage::class,'product_id','id');
    }

}
