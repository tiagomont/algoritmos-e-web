<?php

$num = 10;
$primeiro = 0;
$segundo = 1;

echo "Os primeiros $num números da sequência de Fibonacci são:" . PHP_EOL;

for ($i = 0; $i < $num; $i++) {
    echo "$primeiro, ";
    $temp = $primeiro + $segundo;
    $primeiro = $segundo;
    $segundo = $temp;
}