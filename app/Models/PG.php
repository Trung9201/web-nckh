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
    public function detailpg()
    {
        return $this->belongsTo(Detail_PG::class, 'pg_id');
    }

}