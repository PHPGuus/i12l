<?php

namespace PhpGuus\I12\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Country extends Model
{
	use SoftDeletes;

	//region Public Relationships

	/**
	 * The currencies used in this Country.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
	 */
	public function currencies()
	{
		return $this->belongsToMany(Currency::class);
	}

	//endregion

	//region Protected Attributes

	/**
	 * @inheritDoc
	 */
	protected $fillable = [
		'alpha2', 'alpha3', 'numeric', 'short_name'
	];

	/**
	 * @inheritDoc
	 */
	protected $hidden = [
		'created_at', 'deleted_at', 'updated_at'
	];

	/**
	 * @inheritDoc
	 */
	protected $visible = [
		'alpha2', 'alpha3', 'id', 'numeric', 'short_name'
	];

	//endregion
}