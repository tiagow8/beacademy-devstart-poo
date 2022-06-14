<?php

    include "Produto.php";
    include "Categoria.php";


    $c1 = new Categoria("Canecas", "Personalizadas");
    $c2 = new Categoria("Tvs", "SmartTV4k");
    $c3 = new Categoria("Calçados", "Calçados em geral");


    $produto1 = new Produto("Camisa polo Nike", 80.90, $c3);
    $produto1->setDescricao("Tenis para academia");
    // $produto1->setNome("Camisa polo Nike");
    // $produto1->setValor(80.90);

    $produto2 = new Produto("Sapato Social", 90.90, $c1);
    $produto2->setDescricao("Sapatos");
    // $produto2->setCategoria($c2);
    // $produto2->setNome("Sapato Social");
    // $produto2->setValor(90.90);
    $produto3 = new Produto("Casacos Prada", 120.99, $c2);
    $produto3->setDescricao("Casaco masc.");
    // $produto3->setNome("Casaco marrom de frio");
    // $produto3->setValor(120.99);

    var_dump($produto1);
    var_dump($produto2);
    var_dump($produto3);
