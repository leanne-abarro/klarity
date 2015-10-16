<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //
    public function user (){
    	return $this -> belongsTo('App\Models\User');
    }

    protected $fillable = ["path","user_id"];

}
