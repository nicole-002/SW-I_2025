<?php

class Carro{
    public $Marca;
    public $Modelo;
    public $Combustivel;
    public $Portas;
    public $Tanque;
    
    public function MostrarInfo(){
        echo "Marca" . this-> Marca . "<br>";
        echo "Modelo" . this-> Modelo . "<br>";
        echo "Combustível" . this-> Combustivel . "<br>";
        echo "Quantidade de Portas" . this-> Portas . "<br>";
        echo "Capacidade do Tanque" . this-> Tanque . "<br>";
    }
}

?>