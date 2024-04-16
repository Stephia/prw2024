<?php

    $tempo_segundos = intval(readline());

    $horas = intval($tempo_segundos / 3600);
    $tempo_segundos %= 3600;
    $minutos = intval($tempo_segundos / 60);
    $segundos = $tempo_segundos % 60;

    echo $horas . ":" . $minutos . ":" . $segundos . "\n";

?>
