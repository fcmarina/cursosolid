<?php

namespace fcmarina\Solid\banco;

require __DIR__. '/../vendor/autoload.php';
require('Mysql.php');
require('MariaDB.php');


/**
 * Classe de conexão com banco de dados.
 */
class Connection
{
	
	public function __construct($servidor, $nome, $usuario, $senha)
	{
		$this->servidor = $servidor;
		$this->nome = $nome;
		$this->usuario = $usuario;
		$this->senha = $senha;
	}

	public function connect(Db $db)
	{
		$db->connect($this->servidor, $this->nome, $this->usuario, $this->senha);
	}
}

$conn = new Connection('localhost', 'curso-solid', 'root', '1234');
$conn->connect(new MariaDB);
$conn->connect(new Mysql);
