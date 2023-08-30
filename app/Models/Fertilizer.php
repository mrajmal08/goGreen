<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fertilizer extends Model
{
    use HasFactory;
    protected $table = "fertilizer";
    protected $fillable = [
        'name',
        'description',
        'location',
        'price',
        'discount_price',
        'photo',
        'type_id',
    ];
}
