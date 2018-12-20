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
           [ 'title' => 'The Dark Knight Returns','illustrator' => 'Frank Miller','description' => 'Bruce Wayne, ahora de 55 años de edad, sale de su retiro para ponersela capa','img_cover' => '/covers/batmandkr1.jpg','pdf' => '/pdfs/BatmanTheDarkKnightReturns-01.pdf','rating' => '10','edition' => '01','price' => '175.00','release_date' =>  '1986-06-24','created_at' => '2018-12-18 03:25:29','updated_at' => '2018-12-18 03:25:29'],
           [ 'title' => 'The Dark Knight Returns','illustrator' => 'Frank Miller','description' => 'Bruce Wayne, ahora de 55 años de edad, sale de su retiro para ponerse la capa','img_cover' => '/covers/batmandkr2.jpg','pdf' => '/pdfs/BatmanTheDarkKnightReturns-02.pdf','rating' => '10','edition' => '02','price' => '175.00','release_date' => '1986-07-24','created_at' => '2018-12-18 03:25:29','updated_at' => '2018-12-18 03:25:29'],
           [ 'title' => 'The Dark Knight Returns','illustrator' => 'Frank Miller','description' => 'Bruce Wayne, ahora de 55 años de edad, sale de su retiro para ponerse la capa','img_cover' => '/covers/batmandkr3.jpg','pdf' => '/pdfs/BatmanTheDarkKnightReturns-03.pdf','rating' => '10','edition' => '03','price' => '189.99','release_date' => '1986-08-24','created_at' => '2018-12-18 03:25:29','updated_at' => '2018-12-18 03:25:29'],
           [ 'title' => 'Dragon Ball Z','illustrator' => 'Akira Toriyama','description' => 'Colección Vol 1 a 11 de Dragon Ball','img_cover' => '/covers/Goh1eNHH84ZoUzQelGU2EOL2EpFssZJjQZqbnTlB.jpeg','pdf' => '/pdfs/aMru9LJBp6MagbIvbnpY5jLZUdlh6PMWnNI8ZcJs.pdf','rating' => '8','edition' => '11','price' => '500.00','release_date' => '1998-10-25','created_at' => '2018-12-19 21:43:07','updated_at' => '2018-12-19 21:43:07'],
           [ 'title' => 'Death Note','illustrator' => 'Shukio Torikama','description' => 'Volumen 41 de Death Note','img_cover' => '/covers/9K5fAVEXvyKbKLETesKUXNXxUBR4Wreah1saEHRm.jpeg','pdf' => '/pdfs/i1aekypKHtyr4NthhCrfwXeQ50fBE1wYOIQZJydU.pdf','rating' => '5','edition' => '41','price' => '168.00','release_date' => '2010-05-22','created_at' => '2018-12-19 21:45:13','updated_at' => '2018-12-19 21:45:13'],
           [ 'title' => 'Sailor Moon','illustrator' => 'Naoko Takeuchi','description' => 'Vol 11 de Sailor Moon','img_cover' => '/covers/1lsZRYLWE2eD5gMhZn49ibZpIXcACbePpulssSy6.jpeg','pdf' => '/pdfs/30NcdYmS8jPLl1Ln1ubGggJwVfv8Ut8xXwwT1GL4.pdf','rating' => '10','edition' => '11','price' => '259.00','release_date' => '1997-01-03','created_at' => '2018-12-19 21:47:20','updated_at' => '2018-12-19 21:47:20'],
           [ 'title' => 'One Piece','illustrator' => 'Eiichiro Oda','description' => 'Volumen 21 de One Piece','img_cover' => '/covers/Mk66vkUJDUmtPKtuh6rhJmlWJ2ndccIOrWmi63aH.png','pdf' => '/pdfs/oMOje0McYQN6y1j5gUMLrkWSYyfd8a9tEEgCCQOg.pdf','rating' => '8','edition' => '21','price' => '364.00','release_date' => '2015-09-15','created_at' => '2018-12-19 21:49:48','updated_at' => '2018-12-19 21:49:48'],
           [ 'title' => 'Rick & Morty','illustrator' => 'CJ Cannon','description' => 'Issue #1 Rick and Morty','img_cover' => '/covers/zb7FCAirNIP7RPJe566HP3vFQeyMSOoEjqiaSTIX.png','pdf' => '/pdfs/WhoaLn0iUQ9uWUYQdB8I0iQX8NaZSVW0wNaHej7t.pdf','rating' => '10','edition' => '1','price' => '560.00','release_date' => '2015-04-01','created_at' => '2018-12-19 22:03:38','updated_at' => '2018-12-19 22:03:38'],
           [ 'title' => 'Rick & Morty','illustrator' => 'CJ Cannon','description' => 'Issue #2 Rick and Morty','img_cover' => '/covers/6nnG4cSgLlz28OF82HqXbI47Wkmp2Y2Sf0lmZHQq.png','pdf' => '/pdfs/7TqXsQJD7iAKyYT712UVIR5YohKtuEDrm7Q6tBFC.pdf','rating' => '8','edition' => '2','price' => '650.00','release_date' => '2015-08-15','created_at' => '2018-12-19 22:16:57','updated_at' => '2018-12-19 22:16:57'],
           [ 'title' => 'Rick & Morty','illustrator' => 'CJ Cannon','description' => 'Issue #3 Rick and Morty','img_cover' => '/covers/nuBCiefKFcKyUE3j8FY50BnmfqIti4HwNad1mEMs.png','pdf' => '/pdfs/YdJ0ttTOntuTFnvdeuAfeg0h5G3ltJ808U3s7Nsq.pdf','rating' => '8','edition' => '3','price' => '450.00','release_date' => '2015-10-01','created_at' => '2018-12-19 22:17:52','updated_at' => '2018-12-19 22:17:52'],
           [ 'title' => 'Rick & Morty','illustrator' => 'CJ Cannon','description' => 'Issue #4 Rick and Morty','img_cover' => '/covers/RywTUx0Z1qbrXsECjj7BJ63vU30nyzxYERBmJuKX.png','pdf' => '/pdfs/TCLJqNiG5cmUJ5F2UgLS3EwRMrvu1VtbXDSX9h3V.pdf','rating' => '9','edition' => '4','price' => '650.00','release_date' => '2016-01-01','created_at' => '2018-12-19 22:18:46','updated_at' => '2018-12-19 22:18:46'],
           [ 'title' => 'Rick & Morty','illustrator' => 'CJ Cannon','description' => 'Issue #5 Rick and Morty','img_cover' => '/covers/f8mZS5I8229WhflfMyqHYwxRp6TNRKbUtfRuDCFR.png','pdf' => '/pdfs/L38mYIBSCZJhbm1bcJx9ElkZ2XzfC1O7AeFliYXj.pdf','rating' => '7','edition' => '5','price' => '500.00','release_date' => '2016-03-01','created_at' => '2018-12-19 22:19:43','updated_at' => '2018-12-19 22:19:43'],
           [ 'title' => 'Rick & Morty','illustrator' => 'CJ Cannon','description' => 'Issue #6 Episodio Nº 26 de Rick and Morty','img_cover' => '/covers/IcBIT4ntfYqfPzg8NRto21ImfY9PPb1XgQt0ka20.png','pdf' => '/pdfs/bh7B3daC6ns3QpSu3r9Dp2w8O1OYGBtzdjtspYnz.pdf','rating' => '9','edition' => '6','price' => '700.00','release_date' => '2016-06-01','created_at' => '2018-12-19 22:21:36','updated_at' => '2018-12-19 22:21:36'],
           [ 'title' => 'Rick & Morty','illustrator' => 'CJ Cannon','description' => 'Issue Especial Rick and Morty - Mr Poopy Butthole!!','img_cover' => '/covers/Z1ich1dSQEIMvNTL8dScsql3qRtxRoOXwlJj2dO3.png','pdf' => '/pdfs/38l02I4cJ2B0owZiNbCO7ljQhDnUvrU2Zy2W50d5.pdf','rating' => '10','edition' => '1','price' => '750.00','release_date' => '2018-05-01','created_at' => '2018-12-19 22:23:00','updated_at' => '2018-12-19 22:23:00'],
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
         Schema::drop('authors');
         Schema::drop('characters');
         Schema::drop('comic_universe');
     }
}
