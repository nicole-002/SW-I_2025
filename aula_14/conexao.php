<?php
    $host = 'localhost';
    $dbname = 'loja';
    $user = 'root';
    $pass = '';
    try {//testa para confirmar se esta funcionando
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);//pdo é uma claasse interna com metodos ja existentes
        // Habilita erros do PDO
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//exibe os erros da vrsao php 
        echo "Conexão bem-sucedida! <br><hr>";
    } catch (PDOException $e) {//caso o try nao funcione cai no catch
        echo "Erro na conexão: " . $e->getMessage();
    }    

?> 