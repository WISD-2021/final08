<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Order;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'acc',
        'pass',
        'name',
        'mail'
    ];

    public function orders(){
        return $this->hasMany(Order::class);
    }
}
