<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chat_of_user;
use App\Chat_of_user_connect;//users_conn
use App\Chat_of_user_chat; //users_msg

class ApiController extends Controller
{
    //
    function index()
    {
        return response()->json(Chat_of_user::all(),200);
    }
}
