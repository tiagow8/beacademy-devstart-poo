<?php

    include "./classes/Usuario.php";
    include "./classes/Cliente.php";
    include "./classes/ClienteVip.php";
    include "./classes/Gestor.php";
    include "./classes/GestorGeral.php";

    $cliente1 = new Cliente("zezinho@gmail.com", "124457");
    $cliente1->setNome("Zezinho");
    $cliente1->setDataCadastro("05/03/2022");

    $gestor1 = new Gestor("Carlos@gmail.com", "123486", 8829.52);
    $gestor1->setNome("Carlos");

    $gestorGeral1 = new GestorGeral("tiago@gmail.com", "1#63ye", 9100);


    var_dump($cliente1);
    var_dump($gestor1);
    var_dump($gestorGeral1);
