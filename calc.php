<?php

$calc = function($array, $n1, $n2){

    $count = 0;

    foreach($array as $index => $value){
        if($index >=$n1  && $index <= $n2 ) {
            $count += $value;
        }
    }

    return $count;
};

$array = array(0,1,2,3,4,5,3);

echo $calc($array,4,4)."\n";