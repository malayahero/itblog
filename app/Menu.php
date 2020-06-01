<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    //
    protected $guarded = [];
    public function post(){
    	return $this->hasMany('App\Post');
    }
    public function user(){
    	return $this->hasMany('App\User');
    }
}
