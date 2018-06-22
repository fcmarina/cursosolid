<?php

namespace fcmarina\Solid\banco;

require __DIR__. '/../vendor/autoload.php';

/**
 * Interface Db.
 */
interface Db
{
	public function connect($servidor, $nome, $usuario, $senha);
}

