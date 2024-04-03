<?php
$num = intval(readline("Tabuada de: "));
for ($i = 1; $i <= 10; $i++) {
    $x = $num * $i;
    echo "$num x $i = $x". PHP_EOL;
}