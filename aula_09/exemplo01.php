<?php

    include_once 'Pessoa.class.php';

    // criar um objeto - instancia da classe pessoa
    $fulano = new Pessoa();
    $ciclano = new Pessoa();
    $beltrano = new Pessoa();
    
    // var_dump($fulano);

    // atribuir valores
    $fulano->Nome = "fulano da silva";
    $fulano->Peso = 52;
    $fulano->Altura = 1.59;

    $ciclano->Nome = "ciclano de souza";
    $ciclano->Peso = 46;
    $ciclano->Altura = 1.60;

    $beltrano->Nome = "beltrano de santos";
    $beltrano->Peso = 46;
    $beltrano->Altura = 1.60;

    // chamando um método da classe pessoa 
    $fulano->MostrarDados();
    $ciclano->MostrarDados();
    $beltrano->MostrarDados();

    $beltrano->Apresentar();
    
    ?>