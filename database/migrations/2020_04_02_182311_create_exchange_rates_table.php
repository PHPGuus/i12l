<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExchangeRatesTable extends Migration
{
	//region Public Access

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create(config('i12.table_prefix', '') . 'exchange_rates', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->unsignedBigInteger('base_currency_id');
			$table->unsignedBigInteger('target_currency_id');
			$table->string('exchange_rate')->default('0.0');
			$table->boolean('system_generated')->default(FALSE);
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
		Schema::dropIfExists(config('i12.table_prefix', '') . 'exchange_rates');
	}

	//endregion
}