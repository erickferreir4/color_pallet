<?php declare(strict_types=1);

namespace app\lib;

use app\interfaces\IAssets;

/**
 *
 * Load Assets
 *
 */
class Assets implements IAssets
{
	public function __construct()
	{
	}

	// load style html and replace
	public function loadStyle( $style ) : string
	{
		$src = file_get_contents(__DIR__ . '/../templates/css.html');
		$src = str_replace('[[CSS]]', '/assets/css/'. $style .'.css', $src);

		return $src;
	}

	// load script html and replace
	public function loadScript( $script ) : string
	{
		$src = file_get_contents(__DIR__ . '/../templates/script.html');
		$src = str_replace('[[JS]]', '/assets/js/'. $script .'.js', $src);

		return $src;
	}
}
