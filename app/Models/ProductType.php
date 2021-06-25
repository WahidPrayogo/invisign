<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductType extends Model
{
    //use HasFactory;
    
    use SoftDeletes;
    
    protected $fillable = [
        'product_discounts_id', 'title', 'feature_1', 'feature_2', 'feature_3',
        'feature_4', 'feature_5'
    ];

    protected $hidden = [

    ];
    
    public function product_discount(){
        return $this->belongsTo(ProductDiscount::class, 'product_discounts_id', 'id'); 
    }

    public function product_detail(){
        return $this->hasMany(ProductDetail::class, 'product_details_id', 'id');
    }
}
