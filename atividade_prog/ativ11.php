<?php

class Retangulo {
    private $largura;
    private $altura;

    public function __construct($largura, $altura){
        $this->setlargura ($largura);
        $this->setaltura ($altura);

    }

    public function calcularArea(){
        return ($this->largura * $this->altura);
    }

    public function calcularPerimetro(){
        return (2*($this->largura + $this->altura));
    }

    public function getLargura() {
        return $this->largura;
    }
    public function getAltura() {
        return $this->altura;
    }

    public function setLargura ($largura){
        if ($largura > 0){
           $this->largura = $largura;

        }
        
    }
    public function setAltura ($altura){
        if ($altura > 0){
          $this->altura = $altura;

        }
        
    }
}

$R1= new retangulo (20, 30);
$R2= new retangulo (30, 50);
if ($R1->calcularArea() > $R2->calcularArea()){
    echo "retangulo 1 tem a maior area";
} else {
    echo "reatngulo 2 tem a maior area" . "<br>"; 
}
echo  " o reatngulo 1 tem a largura:" . $R1->getLargura() . "<br>";
echo  "o retangulo 1 tem a altura: " . $R1->getAltura() . "<br>";
echo  "o retangulo 2 tem a largura: " . $R2->getLargura() . "<br>";
echo  "o retangulo 2 tem a  altura: " . $R2->getAltura();





?>