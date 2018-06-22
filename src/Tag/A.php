<?php

namespace fcmarina\Solid\Tag;

/**
 * Classe link
 */
class A 
{
	
	public function render(string $href, string $ancor)
	{ 
		return '<a href= "'.$href.'">' .$ancor . '</a>';
	}
}