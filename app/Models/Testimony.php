<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Testimony extends Model
{
    //use HasFactory;
    protected $fillable = [
        'transactions_id', 'testimony', 'status'
    ];

    protected $hidden = [

    ];
    
    public function transaction(){
        return $this->HasOne(Transaction::class, 'transactions_id', 'id'); 
    }
}
