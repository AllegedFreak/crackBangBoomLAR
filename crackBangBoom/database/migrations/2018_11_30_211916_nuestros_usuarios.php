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

        $table->increments('id');
        $table->string('name', 25);
        $table->string('email', 191)->unique();
        $table->string('img_avatar', 200)->nullable();
        $table->string('password', 200);
        $table->string('remember_token', 200)->nullable();
        $table->string('country_birth', 50);
        $table->string('pcia_ar')->nullable();
        $table->date('date_birth');
        $table->boolean('admin')->default(0);

        $table->timestamps(); //no borrar
      });

      \DB::table('users')->insert([
        [ 'id' => '1','name' => 'Marcos','email' => 'marcoscav@gmail.com','img_avatar' => NULL,'password' => '$2y$10$tGLaOzWMLWmmt6.jivz6cOo4I8D4WMBse322agBmWu9XPp6XcosHG','remember_token' => 'raMc1Q4VwqPPo1UY31lZJ2TQ5cCQuFFCjHXIr0EDM4ezuXjveFGxJco88pK6','country_birth' => 'AR','date_birth' => '1990-12-12','admin' => '1','created_at' => '2018-12-19 18:49:02','updated_at' => '2018-12-19 18:49:02'],
        [ 'id' => '2','name' => 'Aldana','email' => 'aldana@gmail.com','img_avatar' => NULL,'password' => '$2y$10$7RspSjZJ8Hu2v6mnHuuQuuo1Nu0FGdN8kWRYTFYUGeN11cYq6T.nm','remember_token' => 'XwafFJXy0MYzdEgaZnCY4W7DUtwl2bO4cuc6pLFQZcGC02bNLbkBNWv88tE6','country_birth' => 'AR','date_birth' => '1990-12-12','admin' => '0','created_at' => '2018-12-19 18:58:44','updated_at' => '2018-12-19 18:58:44'],
      ]);

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
