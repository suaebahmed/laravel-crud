<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserChatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chat_of_user_chats', function (Blueprint $table) {
            $table->id();
            $table->string('msg');

            $table->unsignedBigInteger('sender_id');
            $table->unsignedBigInteger('receiver_id');
            $table->foreign('sender_id')->references('user_id')->on('chat_of_user');
            $table->foreign('receiver_id')->references('user_id')->on('chat_of_user');

            $table->tinyInteger('pin')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chat_of_user_chats');
    }
}
