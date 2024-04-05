<?php

$sum = $cont = 0;

while (true) {
    $num = intval(readline("Escreva um número (-1 para parar): "));
    if ($num < 0) {
        break;
    } else {
        $cont += 1;
        $sum += $num;
    }
}

echo "A média dos valores é: " . $sum / $cont;

