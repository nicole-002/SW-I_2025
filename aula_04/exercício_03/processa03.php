<?php
    $log = $_POST['cxlog'];
    $sen = $_POST['cxsen'];

    if ($log == 'etec' && $sen == 'informática' ){
        echo "Logado com sucesso";
    }

    else{
        echo "Login ou senha errada!";
    }

?>