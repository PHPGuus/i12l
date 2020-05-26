<?php

namespace PhpGuus\I12\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ExchangeRate extends Model
{
	use SoftDeletes;

	//region Public Relationships

	/**
	 * The base currency of this exchange rate.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function baseCurrency()
	{
		return $this->belongsTo(Currency::class, 'base_currency_id');
	}

	/**
	 * The base currency of this exchange rate.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function targetCurrency()
	{
		return $this->belongsTo(Currency::class, 'target_currency_id');
	}

	//endregion

	//region Protected Attributes

	/**
	 * @inheritDoc
	 */
	protected $fillable = [
		'base_currency_id', 'exchange_rate', 'system_generated',
		'target_currency_id'
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
		'base_currency_id', 'exchange_rate', 'target_currency_id'
	];

	//endregion
}