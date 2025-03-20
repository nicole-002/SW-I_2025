<?php

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if ($email == 'aluno@email.com' && $senha == '1234'){
        //vai para a página 'privada.php'
        $nome = "Aluno";
        header('Location: privada.php?nome='.$nome);
    }
    else{
        //vai para a página 'erro.php'
        header('Location: erro.php');
    }

?>