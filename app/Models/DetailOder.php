<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailOder extends Model
{   protected $table='detail_order';
    protected $fillable = [
        'id',
        'qty',
        'price',
        'total',
       

    ];
    use HasFactory;
    public function product(){
        return $this->hasMany(Product::class,'order_id');
    }
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
