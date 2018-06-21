<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['product_quantity', 'product_name', 'product_description1', 
                           'product_category', 'product_type', 'color_no', 'product_description2',
                           'produce_bottle', 'remarks', 'product_status', 'product_cost', 'MFX',
                           'expiration', 'po'];
    protected $dates = ['created_at', 'updated_at'];
}
