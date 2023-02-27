<?php

function sumInt(array $ar, $n1, $n2) {
    $sum = 0 ;
    foreach($ar as $it) {
        if($it> $n1  && $it < $n2 ) {
            $sum += $it;
        }
    }

    return $sum;
}

$arr = [0,1,2,3,4,5,3];
var_dump(sumInt($arr,0,6));