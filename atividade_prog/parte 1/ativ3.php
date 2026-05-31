<?php

class Pessoa {

    private $idade;

 

    public function setIdade($idade) {

        if ($idade < 0) {
          echo 'Idade invalida!';
          return; //coloquei um return para impedir de aparecer o -5 


        }

        $this->idade += $idade; // problema: atribui mesmo se invalido
        // atribui o += para aceitar apenas números positivos

    }

 

    public function getIdade() {

        return $this->idade;

    }

}

 

$p = new Pessoa();

$p->setIdade(-5);

echo $p->getIdade(); // imprime -5 !

?>

