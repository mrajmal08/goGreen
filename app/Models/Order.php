<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = "order";
    protected $fillable = [
        'name',
        'phone',
        'address',
        'city',
        'product_name',
        'product_photo',
        'quantity',
        'price',
        'product_id',
        'status',
        'user_id',
        'type'
    ];
}
