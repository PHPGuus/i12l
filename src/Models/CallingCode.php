<?php

namespace PhpGuus\I12\Models;

use Illuminate\Database\Eloquent\Model;

class CallingCode extends Model
{
	//region Protected Attributes

	/**
	 * @inheritDoc
	 */
	protected $fillable = [
		'calling_code', 'country_id'
	];

	/**
	 * @inheritDoc
	 */
	protected $hidden = [
		'created_at', 'deleted_at', 'id', 'updated_at'
	];

	/**
	 * @inheritDoc
	 */
	protected $visible = [
		'calling_code', 'country_id'
	];

	//endregion
}