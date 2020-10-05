<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function medicines(){
       return $this->hasMany('App\Medicine');
    }
}
