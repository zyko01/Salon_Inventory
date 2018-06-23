<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RebottledProduct extends Model
{
    protected $fillable = ['product_id', 'use_product', 'produce_bottle', 'designation' ];
    
     protected $dates = ['created_at', 'updated_at'];
}
