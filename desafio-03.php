<?php

$sum = $cont = 0;

while (true) {
    // O usuario escreve um valor 
    $num = intval(readline("Escreva um número (-1 para parar): "));
    if ($num < 0) {
        break;
    } else {
        $cont += 1;
        $sum += $num;
    }
}

$media = $sum / $cont;

echo "A média dos valores é: $media";

