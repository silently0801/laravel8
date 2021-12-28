<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    protected $table = 'stores';
    
    protected $fillable = ['store_area_id','name','phone','address','image_url'];

    public function storeArea()
    {
        return $this->belongsTo(StoreArea::class,'store_area_id','id');
    }
}
