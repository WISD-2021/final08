<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\User;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
