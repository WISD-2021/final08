<?php

namespace App\Models;

use App\Models\Cart_item;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'name',
        'invent',
        'price',
        'detail',
        'photo',
    ];

    public function cart_items()
    {
        return $this->belongsTo(Cart_item::class);
    }
}
