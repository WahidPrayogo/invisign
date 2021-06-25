<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductDetail extends Model
{
   // use HasFactory;

    use SoftDeletes;

    protected $fillable = [
        'title', 'slug', 'type', 'about', 'price', 'product_types_id'
    ];

    protected $hidden = [

    ];

    public function galleries(){
        return $this->hasMany(Gallery::class, 'product_details_id', 'id');
    }

    public function product_type(){
        return $this->belongsTo(ProductType::class, 'product_types_id', 'id');
    }

}
