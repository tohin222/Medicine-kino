<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicines', function (Blueprint $table) {
            $table->increments('id');
            $table->string('medicine_name');
            $table->integer('medicine_quantity');
            $table->integer('medicine_price');
            $table->text('medicine_description')->comment('1');
            $table->integer('company_id')->default(1);
            $table->integer('disease_id')->default(1);
            $table->string('medicine_image')->default('medicine_image/sampleimage.jpg');
            $table->softDeletes();
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
        Schema::dropIfExists('medicines');
    }
}
