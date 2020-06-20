<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Chat_of_user;
use App\Chat_of_user_connect;//users_conn
use App\Chat_of_user_chat; //users_msg

class chatController extends Controller
{
    function index(){
        return view('chat.index');
    }
    function enterUser(Request $req){
        $username = $req->username;
        $user = Chat_of_user::where('username',$username)->first();
        if($user){
            $req->session()->put('logged_user_name',$username);
            $req->session()->put('logged_user_id',$user->user_id);
            $req->session()->flash('login_success','wellcome to chat app');
            return redirect('/chat/all');
        }
        return redirect('chat');
    }
    function getAllUser(){
        $users = Chat_of_user::all();
        return view('chat.newChat',compact('users'));
    }
    function selectUser(Request $req){
        $user1_id = session()->get('logged_user_id');
        $user2_id = $req->user2;

        $with_user = Chat_of_user::where('user_id',$user2_id)->first();

        $sender = DB::select("SELECT * FROM chat_of_user_chats WHERE sender_id = $user1_id AND receiver_id = $user2_id ");
        $receiver = DB::select("SELECT * FROM chat_of_user_chats WHERE sender_id = $user2_id AND receiver_id = $user1_id");
        // 3 compact() doesnot work
        return \view('chat.userChat',compact('sender'),['x'=>$with_user,'receiver'=>$receiver]);
    }

    function msgInsert(Request $req){
        $user1 = session()->get('logged_user_id');
        $user2 = $req->user2;
        $msg = $req->msg;

        // Chat_of_user_chat::insert(['msg'=>$msg,'sender_id'=>$user1,'receiver_id'=>$user2]);
        $new_msg = new Chat_of_user_chat;
        $new_msg->msg = $msg;
        $new_msg->sender_id = $user1;
        $new_msg->receiver_id = $user2;
        $new_msg->save();

        return \response()->json(null,200);
    }
}