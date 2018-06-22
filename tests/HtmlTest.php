<?php

namespace fcmarina\Solid;

/**
 * Classe de teste
 */
class HtmlTest extends \PHPUnit\Framework\TestCase
{
	
	public function testPrimeiroTeste()
	{
		$html = new Html;
		$img = $html->img('images/photo.jpg');

		$this->assertEquals('<img src="images/photo.jpg">', $img);
	}
}
