<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Universos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('universes', function (Blueprint $table) {
          $table->increments('id');
          $table->string('universe', 100);
          $table->timestamps();
        });

        \DB::table('universes')->insert([
          [ 'universe'=>'Marvel'],
          [ 'universe'=>'DC'],
          [ 'universe'=>'Manga'],
          [ 'universe'=>'Otro'],
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('universes');
    }
}
