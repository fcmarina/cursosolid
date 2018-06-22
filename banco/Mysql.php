<?php

namespace fcmarina\Solid\banco;

require __DIR__. '/../vendor/autoload.php';
require_once('Db.php');



/**
 * Classe do banco de dados Mysql.
 */
class Mysql implements Db{

	public function connect($servidor, $nome, $usuario, $senha)
	{
		echo 'Conecta com Mysql';
	}

}
