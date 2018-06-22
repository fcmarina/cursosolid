<?php

namespace fcmarina\Solid;

/**
 * Classe Html
 * TDD Test driven development
 * Cria primeiro o resultado final, depois implementa.
 */
class Html  
{
	
	public function img(string $src){
		return '<img src="'.$src.'">';

	}
}