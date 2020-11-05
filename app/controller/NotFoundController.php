<?php declare(strict_types=1);

namespace app\controller;

use app\traits\TemplateTrait;

/**
 *
 *	NOT FOUND
 *
 */
class NotFoundController
{
	use TemplateTrait;

	public function __construct()
	{
		$this->setTitle('404');
		$this->layout('NotFound');
	}
}
