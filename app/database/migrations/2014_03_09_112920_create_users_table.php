<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('users', function(Blueprint $table) {
      $table->increments('id');
      $table->string('identifier');
      $table->string('photoURL')->nullable();
      $table->string('profileURL')->nullable();
      $table->string('displayName')->nullable();
      $table->string('firstName')->nullable();
      $table->string('lastName')->nullable();
      $table->string('gender')->nullable();
      $table->integer('age')->nullable();
      $table->integer('phone')->nullable();
      $table->string('address')->nullable();
      $table->string('region')->nullable();
      $table->string('username')->unique();
      $table->string('email')->unique();
      $table->string('password')->nullable();
      $table->string('password_confirmation')->nullable();
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
    Schema::drop('users');
  }

}
