<?php declare(strict_types=1);

namespace app\controller;

use app\helpers\FilterSingleton;

/***
 *
 *	App Controller
 *
 */
final class AppController
{
	protected $load;

	public function __construct()
	{
	}

	public function router() : void
	{
		$this->load = $this->getUri();

		new $this->load();
	}

	protected function getUri() : string
	{
		$path = FilterSingleton::sanitize($_SERVER['REQUEST_URI']);

		$relativeClass = ucfirst(explode('/', $path)[1]);

		if( $relativeClass === 'Index' || $relativeClass === '' ) {
			return 'app\controller\IndexController';
		}

		$file = __DIR__ . '/' . $relativeClass . 'Controller.php';

		if( file_exists($file) ) {
			return 'app\controller\\' . $relativeClass . 'Controller';
		}

		return 'app\controller\NotFoundController';
	}
}
