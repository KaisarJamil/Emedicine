<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function medicine(){
         return $this->belongsToMany('App\Medicine','medicine_order')->withTimestamps();
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
