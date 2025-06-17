<?php

    include_once "Aluno.class.php";

    $fulano = new Aluno("Pamela", 5, 7);

    echo "Aluno(a): " . $fulano->getNome() . "<br>";
    echo "Média das notas: " .  $fulano->Media($fulano->getNota1(), $fulano->getNota2()) . "<br>";

    $fulano->verificarSituacao($fulano->Media($fulano->getNota1(), $fulano->getNota2()));
 

?>