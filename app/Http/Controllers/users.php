<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class users extends Controller
{
    //
    function login(Request $req){
        
        return view('users/login');
    }
    function register(){

    }
    function index($id){

        echo "id: ".$id."<br>";
        echo "hello world";

        return view('users/fun',["name"=>"suaeb"]);
    }

    function  api(){
        return ["username"=>"suaeb ahmed"];
    }
}
