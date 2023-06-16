<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;
    protected $table = 'detail';
    protected $fillable = [
        'id',
        'qtyskin',
        'priceskin',
        'amountmale',
        'amountfemale',
        'total',
        'user_id',
        'timeadress',
        'pg_id',


    ];
    use HasFactory;
    public function product()
    {
        return $this->hasMany(PG::class, 'pg_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}