<?php

    require_once "class/ClientePessoaJuridica.class.php";
    require_once "class/ClientePessoaFisica.class.php";

    //instanciando a classe 
    $cliente = new Cliente;

    $cliente ->setEndereco("Rua cambará, nº777");
    $cliente ->setBairro("Jardim Miray");

    //mostrando o metódo 'verEndereco()' da classe Pai 'Cliente' 
    echo $cliente ->verEndereco();
    echo"<br> <hr>";

    //instanciando a 2º classe do 'ClientePessoaFisica.class.php'
    $clientePF = new ClientePessoaFisica;
    $clientePF ->setEndereco("Rua Alvilândia, nº239");
    $clientePF ->setBairro("Jd. Caiuby");
    $clientePF ->setNome("Vitão");
    $clientePF ->setCpf("454105456");
    echo $clientePF ->verEndereco();
    echo"<br> <hr>";

     //instanciando a 3º classe do 'ClientePessoaJuridica.class.php'
     $clientePJ = new ClientePessoaJuridica;
     $clientePJ ->setEndereco("Rua João Amazonas, nº43");
     $clientePJ ->setBairro("Jd. Odete");
     $clientePJ ->setNomeFantasia("Gui viado");
     $clientePJ ->setCnpj("5648564054");
     echo $clientePJ ->verEndereco();
?>