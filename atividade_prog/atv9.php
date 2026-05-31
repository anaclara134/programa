<?php

class ContaBancaria {
    private $itular;
    private $saldo;

    public function __construct($titular) {
        $this->titular = $titular;
        $this->saldo = 0;
    }

    public function depositar ($valor){
        if ($valor > 0) {
            $this->saldo += $valor;
        }
    }

    public function sacar ($valor) {
        if($valor > $this->saldo){
            echo "saldo insuficiente <br>";
            return;

        }
        $this->saldo -= $valor;
    }

    public function getTitular () {
         return $this->titular;
    }

     public function getSaldo () {
         return $this->saldo;
    }

}

$c = new ContaBancaria ("pedro");
$c->depositar(200);
$c->sacar(100);
echo "titular: " . $c->getTitular() . "<br>";
echo "saldo: " . $c->getSaldo() . "<br>";


?>