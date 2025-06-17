<?php

include_once "Funcionario.class.php";

$funcionario = new Funcionario("Gisele", 7350, 0.10);

echo "Exibindo informações do funionário <br>";
echo $funcionario->exibirInformacoes() . "<hr>";

echo "Auumentando o salario <br>";
echo $funcionario->aumentarSal() . "<hr>";

echo "Exibindo informações do funionário <br>";
echo $funcionario->exibirInformacoes();


?>