<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    public function company(){
        return $this->belongsTo('App\Company');
    }

    public function order(){
        return $this->belongsToMany('App\Order','medicine_order')->withTimestamps();
    }
}
