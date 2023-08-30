<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pot extends Model
{
    use HasFactory;
    protected $table = "pots";
    protected $fillable = [
        'name',
        'description',
        'location',
        'price',
        'discount_price',
        'photo',
        'type_id',
        'page_id',
    ];
}
