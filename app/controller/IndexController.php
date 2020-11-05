<?php declare(strict_types=1);

namespace app\controller;

use app\traits\TemplateTrait;

/**
 *
 *	Index
 *
 */
class IndexController
{
	use TemplateTrait;

	public function __construct()
	{
		$this->setTitle('Color Hex');
		$this->layout('Index');
	}


}
