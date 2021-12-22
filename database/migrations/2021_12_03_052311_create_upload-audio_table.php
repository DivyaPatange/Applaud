<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUploadAudioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('upload-audio', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('creator');
            $table->string('tag');
            $table->string('title');
            $table->string('publisher');
            $table->string('audiographer');
            $table->string('date');
            $table->string('category');
            $table->string('license');
            $table->string('cover_img');
            $table->string('file_img');
            $table->string('logo_img');
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
        Schema::dropIfExists('upload-audio');
    }
}
