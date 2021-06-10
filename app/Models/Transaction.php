<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
   // use HasFactory;

    use SoftDeletes;

    protected $fillable = [
        'product_details_id', 'users_id', 'transaction_total', 'transaction_status'
    ];

    protected $hidden = [

    ];

    public function product_detail(){
        return $this->belongsTo(ProductDetail::class, 'product_details_id', 'id'); 
         //relation
    }

    public function user(){
        return $this->belongsTo(User::class, 'users_id', 'id');  //relation
    }
}
