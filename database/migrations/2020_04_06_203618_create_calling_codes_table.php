<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCallingCodesTable extends Migration
{
	//region Public Access

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create(config('i12.table_prefix', '') . 'calling_codes', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->unsignedBigInteger('country_id');
			$table->string('calling_code');
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
		Schema::dropIfExists(config('i12.table_prefix', '') . 'calling_codes');
	}

	//endregion
}