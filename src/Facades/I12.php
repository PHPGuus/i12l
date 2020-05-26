<?php

namespace PhpGuus\I12\Facades;

use Illuminate\Support\Facades\Facade;

class I12 extends Facade
{
	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 *
	 * @throws \RuntimeException
	 */
	protected static function getFacadeAccessor()
	{
		return 'i12';
	}
}