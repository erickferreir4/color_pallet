<?php declare(strict_types=1);

namespace app\interfaces;

/***
 *
 *	Interface Assets
 *
 */
interface IAssets
{
	public function loadStyle( $style );

	public function loadScript( $script );
}
