<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class newcontroller extends Controller{
// {
//     function viewload(){
//         return view('user',['user'=>['pk','sam','ps']]);
//     }
        function viewload(){
            $data=['pk','pkk','pfff'];
    return view('user',['user'=>$data]);
}
}
