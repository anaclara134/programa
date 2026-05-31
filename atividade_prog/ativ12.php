<?php

class Funcionario {

private $nome;
private $salario; 
private $cargo;

public function __construct($nome, $salario, $cargo){
    $this->nome = $nome;
    $this->salario = $salario;
    $this->cargo = $cargo;
}

public function aumentarSalario($percentual){
    ($this->salario = $this->salario * (1 + $percentual/100));
    number_format($this->salario, 2, ',', '.');
}

public function getNome(){
    return $this->nome;
}

public function getSalario(){
    return $this->salario;
}

public function getCargo(){
    return $this->cargo;
}

public function exibir(){
    echo "nome:" . $this->nome . "<br>";
    echo "cargo " . $this->cargo . "<br>";
    echo "salario= R$" . $this ->salario;

}

}

$F = new Funcionario ("pedro", 1000, "atendente");
echo "ANTES: <br>";
$F->exibir();

$F->aumentarSalario(15);
echo "<br>DEPOIS<br>";
$F->exibir();

?>