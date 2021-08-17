<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->id();
            $table->integer('subject_code');
            $table->string('subject_title');
            $table->text('subject_description_1')->nullable();
            $table->text('subject_description_2')->nullable();
            $table->text('subject_description_3')->nullable();
            $table->string('subject_image')->default('/images/null.svg');
            $table->string('subject_video_intro')->default('/video/null.mp4');
            $table->string('status')->default('active')->nullable();

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
        Schema::dropIfExists('subjects');
    }
}