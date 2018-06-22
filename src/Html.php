<?php

namespace fcmarina\Solid;

/**
 * Classe Html
 * TDD Test driven development
 * Cria primeiro o resultado final, depois implementa.
 */
class Html  
{

	/*
	* Metodo mágico
	*/
	public function __call(string $metodo, array $arguments)
	{
		$class = '\fcmarina\Solid\Tag\\' . ucfirst($metodo);

		return call_user_func_array([new $class, 'render'], $arguments);

	}
}