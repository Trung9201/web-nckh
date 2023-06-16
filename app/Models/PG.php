<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use League\CommonMark\Extension\Table\Table;

class PG extends Model
{
    use HasFactory;
    protected $table = 'pg';
    protected $fillable = [
        'name',
        'amount',
        'price',
        'photo',


    ];
    public function detail()
    {
        return $this->belongsTo(Detail::class, 'pg_id');
    }

}