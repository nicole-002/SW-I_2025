<?php
    require 'conexao.php';
    $id = 3;
    $novoTitulo = "Pequeno PrÍncipe.";
    
    
    $sql = "UPDATE produtos SET preco = :preco WHERE id_livro = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':titulo', $novoTitulo);
    $stmt->bindParam(':id', $id_livro);
    if ($stmt->execute()) {
        echo "Produto atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar produto.";
    }
?>