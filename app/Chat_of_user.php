<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chat_of_user extends Model
{
    public $table = 'chat_of_user';
    public $primaryKey = 'user_id';

    public function users_conn()
    {
        // first parameter: related model path
        // return $this->hasMany('App\Chat_of_user_connect');
        return $this->hasMany('App\Chat_of_user_connect','user1_id');
    }
    public function users_msg()
    {
        return $this->hasMany('App\Chat_of_user_chat','user1_id');
    }
}
