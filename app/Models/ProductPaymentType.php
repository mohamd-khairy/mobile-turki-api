<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPaymentType extends Model
{
    use HasFactory;

    protected $fillable = ['product_id','payment_type_id'];

    public function product()
    {
        return $this->belongsTo(Product::class , 'products');
    }

}