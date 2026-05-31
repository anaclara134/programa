<?php
class livro {

private $autor;
private $paginas;
private $titulo;

public function __construct ($autor, $paginas, $titulo){
    $this->autor = $autor;
    $this->paginas = $paginas;
    $this->titulo = $titulo;
}

public function getAutor () {
    return $this->autor;
    }
 public function getPaginas () {
    return $this->paginas;
    }
public function getTitulo () {
    return $this->titulo;
    } 
}

$a = new livro ('pedro', 100, 'bom dia');

echo $a->getAutor() . "<br>";
echo $a->getPaginas() . "<br>";
echo $a->getTitulo();

?>