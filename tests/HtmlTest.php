<?php

namespace fcmarina\Solid;

/**
 * Classe de teste
 */
class HtmlTest extends \PHPUnit\Framework\TestCase
{
	
	public function testRenderizaImagem()
	{
		$html = new Html;
		$img = $html->img('images/photo.jpg');

		$this->assertEquals('<img src="images/photo.jpg">', $img);
	}

	public function testImagemAncora()
	{
		$html = new Html;
		$img = $html->img('images/photo.jpg');

		$link = $html->a('http://seusite.com/perfil', $img);

		$this->assertEquals('<a href= "http://seusite.com/perfil"><img src="images/photo.jpg"></a>', $link);
	}
}
