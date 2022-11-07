<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{protected $table ='product';
    use HasFactory;
    protected $fillable = [
        'name',
        'amount',
        'price',
        'photo',

    ];
    public function detail(){
        return $this->belongsTo(DetailOder::class,'order_id');
    }


}
