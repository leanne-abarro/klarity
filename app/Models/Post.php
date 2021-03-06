<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //

    public function user (){
    	return $this -> belongsTo('App\Models\User');
    }

    public function comments (){
    	return $this -> hasMany('App\Models\Comment');
    }
    
    public function labels(){
        return $this -> belongsToMany('App\Models\Label');
    }

    protected $dates = ['created_at'];

    protected $fillable = ['title','content','image', 'user_id'];
}
