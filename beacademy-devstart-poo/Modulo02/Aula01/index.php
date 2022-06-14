<?php

    include "Curso.php";
    include "Aluno.php";
    include "Professor.php";


    $p1 = new Professor();
    $p1->nome = "Tiago";
    $p1->cpf = "134.123.654.79";
    $p1->curso = "Introdução básica ao Intermediário PHP";
    $p1->salario = 1000.21;

    $p1->nome .= " Zezinho";

    var_dump($p1);