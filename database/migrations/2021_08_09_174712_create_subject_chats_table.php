<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubjectChatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subject_chats', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_subject_series');
            $table->string('subject_chat_title');
            $table->unsignedBigInteger('subject_chat_sender');
            $table->integer('subject_chat_type');
            $table->unsignedBigInteger('subject_chat_ref');
            $table->text('subject_chat_text');
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
        Schema::dropIfExists('subject_chats');
    }
}