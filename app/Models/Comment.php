<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //

    public function user (){
    	return $this -> belongsTo('App\Models\User');
    }

    public function post (){
    	return $this -> belongsTo('App\Models\Post');
    }

    

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['comment','user_id','post_id'];

}
