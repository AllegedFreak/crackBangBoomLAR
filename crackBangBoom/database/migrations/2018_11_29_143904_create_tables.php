<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tables', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
        });

        //

        // Schema::create('genres', function (Blueprint $table) {
        //   $table->increments('id');
        //   $table->string('name', 180)->unique();
        //   $table->timestamps();
        // });
        //
        // Schema::create('movies', function (Blueprint $table) {
        //   $table->increments('id');
        //   $table->string('name', 180);
        //   $table->integer('genre_id')->nullable();
        //   $table->integer('duracion')->nullable();
        //   $table->timestamp('release_date');    //va en singular este
        //   $table->timestamps();                 //va en plural este
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tables');
    }
}
