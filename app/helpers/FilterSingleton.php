<?php declare(strict_types=1);

namespace app\helpers;

/***
 *
 *	Filter values
 *
 */
final class FilterSingleton
{

	public function __construct()
	{
	}

	static public function sanitize($input) : string
	{
		return filter_var($input, FILTER_SANITIZE_SPECIAL_CHARS);
	}

}

