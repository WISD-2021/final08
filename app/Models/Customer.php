<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Record;
class Customer extends Model
{
    use HasFactory;

    public function Record(){
        return $this->hasMany(Record::class);
    }
}
