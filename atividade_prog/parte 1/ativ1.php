<?php

class Produto {

    private $nome;
    private $preco;

 

    public function __construct($nome, $preco) {
        $this->nome = $nome;
        $this->preco = $preco;
    }

    public function getNome(){
        return $this->nome; //coloquei o get
    }

    public function getPreco(){
        return $this->preco;
    }

}

$p = new Produto('Teclado', 150.00);
echo "produto: " . $p->getNome() . "<br>"; //apresentei com o gets
echo "preço: " . $p->getPreco();  // ESTA LINHA TEM ERRO

?>