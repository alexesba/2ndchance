<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddPetIdToGalleries extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('galleries', function(Blueprint $table) {
			$table->integer('pet_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('galleries', function(Blueprint $table) {
			$table->dropColumn('pet_id');
		});
	}

}
