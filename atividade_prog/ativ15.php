<?php

class Agenda {
    private $contato = [];

    public function adicionarContato($nome, $telefone){
        $c = new Contato($nome, $telefone);
        $this->contatos [] = $c;

    }
    public function listar(){
        foreach($this->contatos as $c) {
            echo $c->getTelefone() . "-";
            echo $c->getNome() . "<br>";
        }
    }
}
    class Contato {
        private $telefone;
        private $nome;

        public function __construct($telefone, $nome){
            $this->nome = $nome;
            $this->telefone = $telefone;
        }
        public function getTelefone(){
            return $this->telefone;
        }
        public function getNome() {
            return $this->nome;
        }
    }

$a = new Agenda ();
$a->adicionarContato("pedro", "99947-4154");
$a->adicionarContato("ana", "99141-0660");
$a->adicionarContato("moara", "999295263");

$a->listar();
?>