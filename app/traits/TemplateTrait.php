<?php declare(strict_types=1);

namespace app\traits;

use app\interfaces\IAssets;
use app\lib\Assets;

/***
 *
 *	Template
 *
 */
trait TemplateTrait
{

	private $title;
	private $assets;
	private $styles;
	private $scripts;

	// load view layout
	public function layout($layout) : void
	{
		$this->general();
		require_once __DIR__ . '/../view/_includes/_head.php';
		require_once __DIR__ . '/../view/_includes/_header.php';
		require_once __DIR__ . '/../view/'. $layout .'View.php';
		require_once __DIR__ . '/../view/_includes/_footer.php';
	}

	// set title page
	public function setTitle($title) : void
	{
		$this->title = $title;
	}

	// set injection assets load
	public function setAssets( IAssets $assets ) : void
	{
		$this->assets = $assets;
	}

	// add css page
	public function addCss( $css )
	{
		$this->styles = $this->assets->loadStyle($css) . $this->styles;	
	}

	// add js page
	public function addJs( $js )
	{
		$this->scripts = $this->assets->loadScript($js) . $this->scripts;	
	}

	// general config page
	public function general()
	{
		$this->setAssets( new Assets );
		$this->addCss('general');
		$this->addCss('reset');
	}



}


