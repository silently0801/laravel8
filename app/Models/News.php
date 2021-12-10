<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $table = 'news';

    // 可填充
    protected $fillable = ['title','date','content','image_url'];
    // 被保護
    // protected $guarded = ['date'];

}
