<?php
$num = intval(readline("Tabuada de: "));
for ($i = 1; $i <= 10; $i++) {
    echo "$num x $i = " . $num * $i . PHP_EOL;
}