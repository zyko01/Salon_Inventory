<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Rebottle extends Model
{
    protected $fillable = ['product_id', 'quantity_use', 'produce_bottle', 'designation' ];
    
     protected $dates = ['created_at', 'updated_at'];

     protected $primaryKey = 'id';
     protected $table = 'rebottles';


     public function product()
     {
        return $this->belongsTo('App\Product');
     }
}
