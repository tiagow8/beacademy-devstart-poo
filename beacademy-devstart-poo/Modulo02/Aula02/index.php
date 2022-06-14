<?php

    include "Produto.php";

    $produto1 = new Produto();
    $produto1->setNome("Caneca personalizada");
    $produto1->setValor(49.90);

    $produto2 = new Produto();
    $produto2->setNome("Camisa Polo");
    $produto2->setValor(39.90);


    var_dump($produto1);
    var_dump($produto2);
