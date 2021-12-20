<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    use HasFactory;
    protected $table = 'facilities';

    protected $fillable = ['title','content','image_url'];

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        dd($this->title,$this->content,$this->image_url,$value,$this->attributes['title']);
    }
}
