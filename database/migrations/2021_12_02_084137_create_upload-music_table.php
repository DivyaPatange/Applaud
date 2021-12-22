<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUploadMusicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('upload-music', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('artist');
            $table->string('tag');
            $table->string('title');
            $table->string('publisher');
            $table->string('composer');
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
        Schema::dropIfExists('upload-music');
    }
}
