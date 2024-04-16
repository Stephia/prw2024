<?php

    $idade_dias = intval(readline());

    $anos = intval($idade_dias / 365);
    $idade_dias %= 365;
    $meses = intval($idade_dias / 30);
    $dias = $idade_dias % 30;

    echo $anos . " ano(s)\n";
    echo $meses . " mes(es)\n";
    echo $dias . " dia(s)\n";
?>
