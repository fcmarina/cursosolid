<?php

namespace fcmarina\Solid\Tag;

/**
 * Classe Img
 */
class Img
{
	
	public function render($src)
	{
		return '<img src="'.$src.'">';
	}
}