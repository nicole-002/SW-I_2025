<?php
    require 'conexao.php';

    $sql = "SELECT * FROM produtos"; //exibe a tabela produtos
    $stmt = $pdo->query($sql); //prepara, essa consuta n tem parametro
    
    
    while ($produto = $stmt->fetch(PDO::FETCH_ASSOC)) { //fetch serve para retornar cada produto, fechtAll é possivel retornar só um item ultilizando o indice
        // echo "<pre>";
        // var_dump($produto); //echo não funciona pois precisa de um laço de repeticao
        echo "ID: " . $produto['id'] . "<br>";
        echo "Nome: " . $produto['nome'] . "<br>";
        echo "Preço: R$" . $produto['preco'] . "<br>";
        echo "Estoque: " . $produto['estoque'] . "<br><hr>";
    }

    //arrays associativas tem os itens com índice com nome definido por nós, n são numeros

?>