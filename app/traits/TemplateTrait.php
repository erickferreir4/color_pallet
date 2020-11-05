<?php declare(strict_types=1);

namespace app\traits;

/***
 *
 *	Template
 *
 */
trait TemplateTrait
{

	private $title;

	public function layout($layout) : void
	{
		require_once __DIR__ . '/../view/_includes/_head.php';
		require_once __DIR__ . '/../view/_includes/_header.php';
		require_once __DIR__ . '/../view/'. $layout .'View.php';
		require_once __DIR__ . '/../view/_includes/_footer.php';
	}

	public function setTitle($title) : void
	{
		$this->title = $title;
	}
}
