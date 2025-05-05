<?php

include_once 'Lampada.class.php';

$lamp01 = new Lampada();

$lamp01 -> Fabricante = "OSRAM";
$lamp01 -> Tensao = "110";
$lamp01 -> Potencia = "50";
$lamp01 -> Cor = "Branco";

$lamp01 -> MostrarDados();

echo "<hr>";

$lamp01-> Desligar();
$lamp01 -> MostrarDados();

?>