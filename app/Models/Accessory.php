<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accessory extends Model
{
    use HasFactory;
    protected $table = "accessories";
    protected $fillable = [
        'name',
        'description',
        'location',
        'price',
        'discount_price',
        'photo',
        'type_id',
        'cat_id',
    ];
}
