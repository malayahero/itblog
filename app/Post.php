<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    public function user(){
    	return $this->belongsTo('App\User');
    }
    public function comments(){
    	return $this->hasMany('App\Comment');
    }
    public function categeories(){
    	return $this->belongsTo('App\Categeories');
    }
    public function menu(){
    	return $this->belongsTo('App\menu');
    }
}
