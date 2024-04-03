<?php

$list_num = [8, 7, 9, 10, 1, 3];

for ($i=0; $i <= count($list_num); $i++) {
    for ($t=0; $t<count($list_num)-1; $t++) {
        if ($list_num[$t] > $list_num[$t+1]) {
            $temp = $list_num[$t];
            $list_num[$t] = $list_num[$t+1];
            $list_num[$t+1] = $temp;
        }
    }
}

print_r($list_num);