<?php

function saycat($msg) {
    $tam = strlen($msg)+2;
    $linha = str_repeat('-', $tam);
    $mensagem = <<<TEXTO
     $linha
    < $msg >
     $linha
     \
      \ |\---/|
        | o_o |
         \_^_/
TEXTO;

    echo $mensagem;
}

$texto = readline("Escreva algo patra o gato falar: ");
saycat($texto);