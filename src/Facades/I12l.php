<?php

namespace PhpGuus\I12l\Facades;

use Illuminate\Support\Facades\Facade;

class I12l extends Facade
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
		return 'i12l';
	}
}
