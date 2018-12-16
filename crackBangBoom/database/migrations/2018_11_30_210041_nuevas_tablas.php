<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NuevasTablas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::create('comics', function (Blueprint $table) {
             $table->increments('id');

             $table->string('title', 200)->nullable();
             $table->string('illustrator', 25)->nullable();
             $table->string('description', 500)->nullable();
             $table->string('img_cover', 180)->nullable();
             // $table->string('img_preview', 180);
             $table->string('pdf', 180)->nullable();
             $table->integer('rating')->nullable();
             $table->integer('edition')->nullable();

             $table->float('price', 5, 2)->nullable();

             $table->date('release_date')->nullable();

             $table->timestamps(); //no borrar
         });

         Schema::create('comic_universe', function (Blueprint $table) {
             $table->increments('id');
             $table->string('universe_id');
             $table->string('comic_id');

             $table->timestamps(); //no borrar
         });

         Schema::create('authors', function (Blueprint $table) {
             $table->increments('author_id');
             $table->string('name', 200);

             $table->timestamps(); //no borrar
         });

         Schema::create('characters', function (Blueprint $table) {
             $table->increments('character_id');
             $table->string('name', 200);

             $table->timestamps(); //no borrar
         });

     }

     /**
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {
         Schema::drop('comics');
         Schema::drop('genres');
         Schema::drop('authors');
         Schema::drop('characters');
     }
}
