<?php

$num = intval(readline("Escreva um número para ver seus divisores: "));

for ($i = 1; $i <= $num; $i++) {
    if ($num % $i == 0) {
        echo "$i ".PHP_EOL;
    }
}