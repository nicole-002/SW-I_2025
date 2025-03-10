<?php
    $nome = $_POST['cxnome'];
    $email = $_POST['cxemail'];
    $data = $_POST['cxdata'];
    $band = $_POST['cxband'];

    echo 'Seus dados: <br>';
    echo 'Nome: ' .$nome, '<br>';
    echo 'Email: ' .$email, '<br>'; 
    echo 'Data: ' .$data, '<br>';
    echo 'Bandeira do cartão: ' .$band;

?>