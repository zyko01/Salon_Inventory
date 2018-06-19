<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [ 'item_name','item_description', 'item_status', 'item_cost', 'item_quantity' ];
    protected $dates = [ 'created_at', 'updated_at' ];
  
}
