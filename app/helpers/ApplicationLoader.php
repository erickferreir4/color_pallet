<?php declare(strict_types=1);

/***
 *
 *	Autoload
 *
 */
final class ApplicationLoader
{
	public function __construct()
	{
	}

	public function register() : void
	{
		spl_autoload_register([$this, 'loadClass']);
	}

	public function loadClass($class) : bool
	{
		$class = str_replace('\\', '/', $class);

		if( strpos($class, 'app/') !== 0 ){
			return FALSE;
		}

		$file = __DIR__ . str_replace('app/', '/../', $class) . '.php';

		if( file_exists($file) ){
			require_once $file;
		}

		return FALSE;
	}
}






