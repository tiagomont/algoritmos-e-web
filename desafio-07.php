<?php

$peso = floatval(readline("Digite seu peso: "));
$altura = floatval(readline("Digite sua altura: "));
$imc = $peso / ($altura * $altura);
$imc_format = number_format($imc, 2);

echo "O seu IMC (Índice de Massa Corporal) é $imc_format";