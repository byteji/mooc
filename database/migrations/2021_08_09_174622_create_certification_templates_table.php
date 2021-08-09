<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertificationTemplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certification_templates', function (Blueprint $table) {
            $table->id();
            $table->string('certification_template_bg');
            $table->string('certification_template_description_1');
            $table->string('certification_template_description_2');
            $table->string('certification_template_provider_1');
            $table->string('certification_template_provider_2');
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
        Schema::dropIfExists('certification_templates');
    }
}
