
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 10</title>
</head>
<body>
<?php

    include_once 'Conta.class.php';

    $conta1 = new Conta();

    $conta1->Nome = "Nicole";
    $conta1->cpf = "xxx.xxx.xxx-90";
    
    echo $conta1->MostrarSaldo();
    echo "<hr>";

    echo $conta1->Depositar(1000);
    echo "<hr>";
    
    echo $conta1->Sacar(500);
    echo "<hr>";

    echo $conta1->MostrarSaldo();
    echo "<hr>";

    

?>
    
</body>
</html>