<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCurrenciesTable extends Migration
{
	//region Public Access

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create(config('i12.table_prefix', '') . 'currencies', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->char('alpha3', '3')->unique();
			$table->unsignedInteger('minor_units');
			$table->string('name')->unique();
			$table->char('numeric', '3')->unique();
			$table->string('unicode');
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
		Schema::dropIfExists(config('i12.table_prefix', '') . 'currencies');
	}

	//endregion
}