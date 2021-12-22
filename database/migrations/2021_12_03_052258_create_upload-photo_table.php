<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUploadPhotoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('upload-photo', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('creator');
            $table->string('tag');
            $table->string('title');
            $table->string('publisher');
            $table->string('photographer');
            $table->string('date');
            $table->string('category');
            $table->string('license');
            $table->string('photo_img');
            $table->string('option');
            $table->string('price')->default('free');
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
        Schema::dropIfExists('upload-photo');
    }
}
