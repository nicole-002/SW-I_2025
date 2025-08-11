<?php
    require 'conexao.php';

    $titulo = "Pequeno Príncipe";
    $genero = "Literatura infantil, Fábula, Novela, Ficção especulativa, Fantasia científica";
    $ano = 1943;
    $autor = "Antoine de Saint-Exupéry";
    $paginas = 96;

    $sql = "INSERT INTO livros (titulo, genero, ano, autor,  paginas) VALUES (:titulo, :genero, :ano, :autor, :paginas)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':titulo', $titulo);
    $stmt->bindParam(':genero', $genero);
    $stmt->bindParam(':ano', $ano);
    $stmt->bindParam(':autor', $autor);
    $stmt->bindParam(':paginas', $paginas);

    if ($stmt->execute()) {
        echo "Produto inserido com sucesso!<br>";
    } else {
        echo "Erro ao inserir produto.<br>";
    }
?>