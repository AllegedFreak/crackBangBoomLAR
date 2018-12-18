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

         \DB::table('comics')->insert([
           [ 'title' => 'Asterix The Gaul','illustrator' => 'Uderzo','description' => 'Primer issue de Asterix','img_cover' => '/covers/CtFGfvoJBw4Bl9j8xnciBiFyOFbmEVhZpOxaPFtQ.png','pdf' => '/pdfs/AZWOk81Yc1ekMYuBIXSO4qkyXK3N6hWWoR2r0lm5.pdf','rating' => '10','edition' => '1','price' => '150.00','release_date' => '1959-10-29','created_at' => '2018-12-18 03:25:29','updated_at' => '2018-12-18 03:25:29'],
           [ 'title' => 'Asterix and the Golden Sickle','illustrator' => 'Uderzo','description' => 'Segundo issue Asterix','img_cover' => '/covers/HZvnIBOzPyXyWIXjMVrPltoSzZTpAHAj1AwoOuhv.png','pdf' => '/pdfs/9PxO8AFZ57gk57imeNaOlD6mbpgt8P0hJXuIli0T.pdf','rating' => '10','edition' => '1','price' => '150.00','release_date' => '1960-08-29','created_at' => '2018-12-18 04:24:40','updated_at' => '2018-12-18 04:24:40'],
           [ 'title' => 'Asterix and the Goths','illustrator' => 'Uderzo','description' => 'Tercer issue de Asterix','img_cover' => '/covers/emShOUrAkjqruVG0Suu21w2cINsL9NMeHSDOAY84.png','pdf' => '/pdfs/kVTZ1umN2wTnbzIPIngJVxb40F0UJ4S6reWy9SiG.pdf','rating' => '10','edition' => '1','price' => '150.00','release_date' => '1961-05-24','created_at' => '2018-12-18 04:28:51','updated_at' => '2018-12-18 04:28:51'],
         ]);

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
