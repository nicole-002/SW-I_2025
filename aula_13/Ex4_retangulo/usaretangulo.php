<?php

include_once "Retangulo.class.php";

$retangulo = new Retangulo(10, 20);


echo "Área do Retangulo: " . $retangulo->calcularArea() . "<hr>";
echo "Perimetro do Retangulo: " . $retangulo->calcularPerimetro();



?>