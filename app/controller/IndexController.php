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

	// generate colors
	public function generate() : string
	{
		$hex = [0, 1, 2, 3, 4, 5, 6, 7 ,8, 9, 'a', 'b', 'c', 'd', 'e', 'f'];
		$html = '';

		for ( $x = 0; $x < 3; $x++ ) {

			$color = '';

			$rgbToHex = [
				number_format(rand(0, 255) / 16, 2, '.', ''),
				number_format(rand(0, 255) / 16, 2, '.', ''),
				number_format(rand(0, 255) / 16, 2, '.', ''),
			];

			$hex1 = explode('.', strval($rgbToHex[0]));
			$hex2 = explode('.', strval($rgbToHex[1]));
			$hex3 = explode('.', strval($rgbToHex[2]));

			$color .= $hex[$hex1[0]];
			$color .= $hex[floor(((intval($hex1[1]) / 100) * 16))];

			$color .= $hex[$hex2[0]];
			$color .= $hex[floor(((intval($hex2[1]) / 100) * 16))];

			$color .= $hex[$hex3[0]];
			$color .= $hex[floor(((intval($hex3[1]) / 100) * 16))];

			$li = file_get_contents(__DIR__ . '/../templates/li.html');

			$html .= str_replace('[[REPLACE]]', $color, $li);

		}

		return $html;
	}

}
