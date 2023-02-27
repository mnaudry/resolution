<?php

function closestToZero(array $ts) {


    if(empty($ts)) {
        return 0;
    }

    $min = $ts[0];

    foreach($ts as $t){
       if(abs($min) == abs($t)){
            if($t > 0 ){
                $min = $t ;
            }
       }
       else {
        
        $tmp = min(abs($min),abs($t));
        if($tmp == abs($t)){
            $min = $t;
        }
       }
    }


    return $min;
}

$ts = [7,-10,13,8,4,-7.2,1.2,-.5,-3.7,3.5,-9.6,6.5,-1.7,-1.2,1];
$ts0=[];
var_dump(closestToZero($ts));