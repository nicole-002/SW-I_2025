<?php
    $nome = $_GET['cxnome'];
    $nota1 = $_GET['cxnum1'];
    $nota2 = $_GET['cxnum2'];
    $nota3 = $_GET['cxnum3'];

    $media = ($nota1 + $nota2 + $nota3) / 3;

    echo "Olá ".$nome, ", a média das suas notas é: ".$media;

?>