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
             $table->string('title', 200);
             $table->string('illustrator', 25);
             $table->string('universe', 25);
             $table->string('edition', 25);
             $table->string('description', 500);
             $table->string('img_cover', 180);
             $table->integer('author_id');
             $table->integer('genre_id');
             $table->integer('rating');
             $table->float('price', 5, 2);
             $table->date('release_date');
             $table->timestamps(); //no borrar
         });

         Schema::create('genres', function (Blueprint $table) {
             $table->increments('genre_id');
             $table->string('name', 200);
             $table->timestamps(); //no borrar
         });

         // Schema::create('authors', function (Blueprint $table) {
         //     $table->increments('author_id');
         //     $table->string('name', 200);
         //     $table->timestamps(); //no borrar
         // });

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
     }
}
