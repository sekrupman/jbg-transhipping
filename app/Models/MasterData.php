<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterData extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'quantity',
    ];

    public function transaction(){
        return $this->hasOne(Transaction::class);
    }
}
