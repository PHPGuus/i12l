<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountriesTable extends Migration
{
	//region Public Access

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create(config('i12.table_prefix', '') . 'countries', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->char('alpha2', '2')->unique();
			$table->char('alpha3', '3')->unique();
			$table->char('numeric', '3')->unique();
			$table->string('short_name')->unique();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists(config('i12.table_prefix', '') . 'countries');
	}

	//endregion
}