<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Orderdetail extends Model
{
    use SoftDeletes;
    use HasFactory;

    public $table = 'orderdetails';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'total',
        'quantity',
        'product_id',
        'order_id',
        'productname',
        'image',
        'discount',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
