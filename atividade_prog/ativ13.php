<?php

class Temperatura {
    private $celsius;

    public function __construct($celsius){
        $this->setcelsius ($celsius);
    }

    public function Fahrenheit (){
        return (($this->celsius * 9/5) + 32);    
    }

    public function Kelvin(){
        return ($this->celsius + 273.15);
    }

    public function getCelsius(){
       return $this->celsius;
    }

    public function setCelsius($celsius){
        $this->celsius = $celsius;
    }


}

$T1 = new Temperatura (0);
$T2 = new Temperatura (100);
$T3 = new Temperatura (37);

echo "0°C = " . $T1->Fahrenheit() . "°F . <br>";
echo "100°C = " . $T2->Fahrenheit() . "°F . <br>";
echo "37°C = " . $T3->Fahrenheit() . "°F . <br>";

echo "0°C = " . $T1->Kelvin() . "°K . <br>";
echo "100°C = " . $T2->Kelvin() . "°K . <br>";
echo "37°C = " . $T3->Kelvin() . "°K . <br>";




?>
