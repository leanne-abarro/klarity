<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request as Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;

class LoginController extends Controller
{
    // show login page

    public function showLoginForm (){

        return view("login");
    }

    public function processLogin (Guard $auth,Request $request){

        //get credentials

        $credential = $request -> only("username","password");

        // get the guard

        if ($auth -> attempt($credential)){ // can log in

            return redirect() -> intended('posts');
            
        } else { 

            return redirect('login') -> with("message","Please try again.");
        }
    }

    public function logout (Guard $auth){

        $auth -> logout();
        return redirect('login');
    }
}
