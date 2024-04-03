<?php
$condicao = true;
$numeroaleatorio = rand (0,100);

while($condicao){
    echo "Tente advinhar um número entre 0 e 100: ";
    $numusuario = readline();


    if($numusuario == $numeroaleatorio){
    echo "Acertooooou, seu delicioso!";
    $condicao = false;
    }

    if($numusuario < $numeroaleatorio){
        echo "Erroou! é um número maior! ".PHP_EOL;
    }

    if($numusuario > $numeroaleatorio){
        echo "Erroou! é um número menor! ".PHP_EOL;
    }

  
}