<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categeories extends Model
{
    //
    public function post(){
    	return $this->hasMany('App\Post');
    }
}
