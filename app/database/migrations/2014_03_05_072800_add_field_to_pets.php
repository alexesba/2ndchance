<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddFieldToPets extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::table('pets', function(Blueprint $table) {
      $table->integer('gallery_id');
    });
  }


  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::table('pets', function(Blueprint $table) {
      $table->dropColumn('gallery_id');
    });
  }

}
