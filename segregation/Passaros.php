<?php
namespace fcmarina\Solid\segregation;

require __DIR__. '/../vendor/autoload.php';


interface Passaro {
    public function anda();
    public function nada();
}

interface PassaroQueVoa extends Passaro {
    public function voa();
}


class Andorinha implements PassaroQueVoa {
    public function voa()
    {
        var_dump('Andorinha voa');
    }
    public function anda()
    {
        var_dump('Andorinha anda');
    }
    public function nada()
    {
        var_dump('Andorinha nada');
    }
}

class Pinguin implements Passaro {
   /* public function voa()
    {
        throw new \Exception('Não use este método');
    }*/
    public function anda()
    {
        var_dump('Pinguin anda');
    }
    public function nada()
    {
        var_dump('Pinguin nada');
    }
}

$passarim = new Andorinha();
$passarim->voa();
$passarim->anda();
$passarim->nada();


$passarim = new Pinguin();
$passarim->anda();
$passarim->nada();
