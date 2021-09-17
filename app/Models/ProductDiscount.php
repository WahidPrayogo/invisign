<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductDiscount extends Model
{
    //use HasFactory;
    
    use SoftDeletes;
    
    protected $fillable = [
        'pakages_id', 'title', 'amount', 'start_at', 'end_at', 'status'
    ];

    protected $hidden = [

    ];

    public function product_type(){
        return $this->hasMany(ProductType::class, 'product_discounts_id', 'id'); 
    }
}