<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    // public function user($user){
    //     echo "$user ";
    //     echo "Hello from controller";
    // }
    //api with controller
    // public function user(){
    // return['name'=>"Pravin",'Age'=>21];
    // }
    public function loadviews(){
        return view("user");            //views file name
    }
}
