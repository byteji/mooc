<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubjectSeriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subject_series', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_subjects');
            $table->string('subject_series_title');
            $table->string('subject_series_status');
            $table->integer('number_ students');
            $table->integer('number_ students_max');
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
        Schema::dropIfExists('subject_series');
    }
}