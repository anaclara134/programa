<?php

class Estoque {
    private $produto = [];

    public function adicionarProdutos($nome, $quantidade){
        $this->produtos[] = [
            'nome' => $nome,
            'qtd' => $quantidade
        ];
    }

    public function listarProdutos(){
        foreach($this->produtos as $p){
            echo $p['nome'] . "-" . $p['qtd'] . "<br>";
        }
    }

    public function totalItens(){
        $total = 0;
        foreach($this->produtos as $p){
            $total += $p['qtd'];
        }
        return $total;
    }
}
 
$E = new Estoque();

$E->adicionarProdutos("arroz", 10);
$E->adicionarProdutos("feijao", 20);
$E->adicionarProdutos("massa", 5);

$E->listarProdutos();

echo "<br>total de itens: " . $E->totalItens();



?>