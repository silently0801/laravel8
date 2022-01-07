<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $fillable = ['order_no','name','phone','email','address','payment','shipment','is_paid'];
    const ISPAID = ['未付款','已付款'];
    const PAYMENT = ['信用卡付款','網路ATM','超商代碼'];
    const SHIPMENT = ['黑貓宅配','超商店到店'];

    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class,'order_id','id');
    }
}
