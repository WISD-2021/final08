<?php

namespace App\Models;

use App\Models\Cart_item;
use App\Models\Order;
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

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function cart_items()
    {
        return $this->hasMany(Cart_item::class);
    }
}
