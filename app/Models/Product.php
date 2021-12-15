<?php

namespace App\Models;

use App\Cart_item;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function cart_items()
    {
        return $this->belongsTo(Cart_item::class);
    }
}
