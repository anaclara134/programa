<?php

class Aluno {

    private $nome;

    private $nota;

 

    public function __construct($nome, $nota) {

        $this->nome = $nome;
        $this->nota = $nota;

    }

 

    public function exibir() {

        echo 'Aluno: ' . $this->nome . ' - Nota: ' . $this->nota; //coloquei o this que faltavam e tirei o $ // ERRO AQUI

    }

}

 

$a = new Aluno('Carlos', 8.5);

$a->exibir();

?>