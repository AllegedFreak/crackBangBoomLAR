<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NuestrosUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('users', function (Blueprint $table) {

        // $table->increments('id');
        // $table->string('name');
        // $table->string('email')->unique();
        // $table->timestamp('email_verified_at')->nullable();
        // $table->string('password');
        // $table->rememberToken();
        // $table->timestamps();

        $table->increments('id_user');
        $table->string('fullname', 200);
        $table->string('username', 25)->unique();
        $table->string('email');
        $table->string('img_avatar', 50)->nullable();
        $table->string('password', 200);
        $table->string('country_birth', 50);
        $table->date('date_birth');
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
        Schema::dropIfExists('users');
    }
}
