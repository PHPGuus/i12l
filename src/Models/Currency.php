<?php

namespace PhpGuus\I12l\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Currency extends Model
{
	use SoftDeletes;

	//region Public Relationships

	/**
	 * The countries that use this Currency.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
	 */
	public function countries()
	{
		return $this->belongsToMany(Country::class);
	}

	//endregion

	//region Protected Attributes

	/**
	 * @inheritDoc
	 */
	protected $fillable = [
		'alpha3', 'minor_units', 'name', 'numeric', 'unicode'
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
		'alpha3', 'id', 'minor_units', 'name', 'numeric', 'unicode'
	];

	//endregion
}
