<?php

function scanChar($str) {

    $length = strlen($str);

    $alpahbet ="ABCDEFGHIJKLMNOPQRSTUVWXYZ";

    for($i = 0 ; $i < $length ; $i ++) {

        if(str_contains($alpahbet,$str[$i])) {
            echo $str[$i];
        }else {
            echo "?";
        }

    }

    echo "\n";
}

//scanChar('AZé3"(àDFJ');


//echo strtotime('now');

$date =   new DateTime('now');

var_dump($date->format("d m Y"));
/*function factorial(n) {
    if (n == 0) {
        return 1;
    }
    else {
        return n * factorial(n);
    }
}*/