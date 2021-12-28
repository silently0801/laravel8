<?php

namespace App\Models;

use App\Models\Store;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StoreArea extends Model
{
    use HasFactory;
    protected $table='store_areas';

    protected $fillable = ['name'];
    
    public function stores()
    {
        return $this->hasMany(Store::class,'store_area_id','id');
    }
}
