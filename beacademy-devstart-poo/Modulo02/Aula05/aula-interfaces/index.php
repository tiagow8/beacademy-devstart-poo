<?php

    include "Validar.php";
    include "ValidarBR.php";
    include "ValidarUS.php";


    $cpf = "00900200309";
    $docX = "11100200300405";

    $br = new ValidarBR();
    $br->validarDocumento($cpf);

    $us = new ValidarUS();
    $us->validarDocumento($docX);


    echo "Funcionou";