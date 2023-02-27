<?php
function mycount($n){
    $count = 0 ;
    for($i =1 ;  $i < $n ; $i++) {
        
        for($j = $i + 1; $j < $n + 1 ; $j++) {
            $count ++;
            //printf("count %d %d \n",$i ,$j);
        }
        //$count++;
    }

    return $count;

}

var_dump(mycount(10));

/**
 * 
 *  ab c 
 *  
 * ab
 * ac
 * bc
 * 
 * 
 * 
 * 
 * 
 */