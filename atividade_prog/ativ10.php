<?php

class Aluno {
    private $nome;
    private $nota1;
    private $nota2;

    public function __construct($nome, $nota1, $nota2){
        $this->nome = $nome;
        $this->setnota1 ($nota1);
        $this->setnota2  ($nota2);
    }
    
    public function calcularMedia () {
        return ($this->nota1+$this->nota2)/2;
    }

    public function calcularituacao() {
         if ($this->calcularMedia() >=5) {
            echo "aprovado";
         }else {
            echo "reprovado";
         }
    }

    public function getNome () {
         return $this->nome;
    }

     public function getNota1 () {
         return $this->nota1;
    }

     public function getNota2 () {
         return $this->nota2;
    }

    public function setNome ($nome) {
        $this->nome = $nome;
    }

    public function setNota1 ($nota1){
        if ($nota1 >= 0 && $nota1 <=10) {
            $this->nota1 = $nota1;
    }else {
        echo "Nota 1 invalida <br>";
    }
    }

     public function setNota2 ($nota2){
        if ($nota2 >= 0 && $nota2 <=10){
            $this->nota2 = $nota2;
    }else {
        echo "Nota 2 invalida <br>";
    }
     }
}

$A = new Aluno ("pedro", 10, 7);
echo "nome: " . $A->getNome() . "<br>";
echo "nota1: " . $A->getNota1() . "<br>";
echo "nota2: " . $A->getNota2() . "<br>";
echo "media:" . $A->calcularMedia() . "<br>";
$A->calcularituacao();





?>