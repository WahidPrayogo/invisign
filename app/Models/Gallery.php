<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gallery extends Model
{
   // use HasFactory;

    use SoftDeletes;

    protected $fillable = [
        'product_details_id', 'image',
    ];

    protected $hidden = [

    ];

    public function product_detail(){
        return $this->belongsTo(ProductDetail::class, 'product_details_id', 'id');  //relation
    }
}
