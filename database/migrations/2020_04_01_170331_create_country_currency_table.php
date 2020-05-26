<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountryCurrencyTable extends Migration
{
	//region Public Access

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create(config('i12.table_prefix', '') . 'country_currency', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->unsignedBigInteger('country_id');
			$table->unsignedBigInteger('currency_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists(config('i12.table_prefix', '') . 'country_currency');
	}

	//endregion
}