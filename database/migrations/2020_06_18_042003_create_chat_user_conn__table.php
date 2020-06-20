<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChatUserConnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chat_of_user_connect', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user1_id'); // we should make user1_id then make foreign
            $table->unsignedBigInteger('user2_id');
            $table->foreign('user1_id')->references('user_id')->on('chat_of_user');
            $table->foreign('user2_id')->references('user_id')->on('chat_of_user');
            $table->smallInteger('read_chats');
            $table->integer('total_chats');
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
        Schema::dropIfExists('chat_of_user_connect');
    }
}
