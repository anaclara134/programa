<?php

class Carro {

    private $modelo;

 

    public function __construct($modelo) {

        $this->modelo = $modelo;

    }

 

    public function getModelo() {

        return $this->modelo;

    }

}

 

$c = new Carro('Fusca'); // ERRO NESTA LINHA coloquei o ne para o objeto funcionar, tag que cria o objeto

echo $c->getModelo();

?>