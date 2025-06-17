<?php

    include_once 'Livros.class.php';
        $livro = new Livro('Iracema','José de Alencar',true);

        //echo "<pre>"; organiza
        //print_r($livro); verficar informação do oobjeto
        

        echo "Exibindo o status do Livro <br>";
        echo $livro->ExibirStatus();
        echo "<hr>";
        echo "Fazendo um empréstimo <br>";
        $livro->Emprestar();
        echo "<hr>";
        echo "Exibindo o status do Livro <br>";
        echo $livro->ExibirStatus();
        echo "<hr>";
        echo "Fazendo uma devolução <br>";
        $livro->Devolver();
        echo "<hr>";
        echo "Exibindo o status do Livro <br>";
        echo $livro->ExibirStatus();
        echo "<hr>";
    
?>