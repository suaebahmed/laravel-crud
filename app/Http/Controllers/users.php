<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

//-- user model --
use App\User;

class users extends Controller
{
    function register(Request $req){

        $name = $req->name;
        $email = $req->email;
        $password = $req->password;
        $hashPassword = Crypt::encryptString($password);
        
        $user = new User;
        $user->name = $name;
        $user->email = $email;
        $user->password = $hashPassword;
        if($user->save()){
            $req->session()->put('user_email',$email);
            return \redirect('/');
        }
        return "Error register";
    }
    function login(Request $req){

        $email = $req->email;
        $password = $req->password;
        $user = User::where('email',$email)->get();

        if(Crypt::decryptString($user[0]->password) == $password){
            $req->session()->put('user_email',$email);
            return \redirect('/');
        }
        return "Error login";
    }
    function logout(Request $req){
        $req->session()->forget('user_email');
        return \redirect('/');
    }
}
