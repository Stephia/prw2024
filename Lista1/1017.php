<?php

    $tempo = readline("Digite o tempo gasto na viagem (em horas): ");
    $velocidade = readline("Digite a velocidade média durante a viagem (em km/h): ");
    $distancia = $tempo * $velocidade;

    $litros = $distancia / 12;

    echo number_format($litros, 3) . PHP_EOL;

?>
