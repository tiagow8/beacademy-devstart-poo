<?php

    include "Aluno.php";
    include "Curso.php";
    include "Professor.php";

    $a1 = new Aluno(); //Objeto Aluno;
    $a1->nome = "Tiago";
    $a1->cpf = "134.123.654-79";

    $a1->nome .= " Zezinho";

    // $aluno1 = ["nome" => "Isadora",
    //             "CPF" => "122.122.657-79"];

    // $aluno2 = ["Nome" => "Adrian",
    //             "cpf" => "133.222.343.-89"];

    // $aluno2 = ["NOME" => "Marcelo",
    //             "CPF" => "124.112.709.38"];


    $CursoPHP = new Curso(); //Objeto Curso;
    $CursoPHP->nome = "Introdução ao PHP";
    $CursoPHP->cargaHoraria = 88;
    $CursoPHP->descricao = " Básico ao intermediário PHP";
    $CursoPHP->professor = "Tiago Zezinho";

    echo "Nome: {$a1->nome} CPF: {$a1->cpf}";
