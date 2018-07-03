<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Excess extends Model
{
    protected $fillable = ['rebottle_id', 'excess_bottle' ];
    
     protected $dates = ['created_at', 'updated_at'];

     protected $primaryKey = 'id';
     protected $table = 'excesses';


     public function rebottle()
    {
        return $this->belongsTo('App\Rebottle');
    }
}
