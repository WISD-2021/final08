<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Customer;
class Record extends Model
{
    use HasFactory;

    public function Customer(){
        return $this->belongsTo(Record::class);
    }
}
