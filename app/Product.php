<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['product_id','product_quantity', 'product_name', 'product_description', 
                           'product_category', 'product_type', 'color_no', 
                            'remarks', 'product_cost', 'expiration', 'date_delivered'];
    protected $dates = ['created_at', 'updated_at'];
}
