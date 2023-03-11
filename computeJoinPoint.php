<?php

function computeJoinPoint($s1, $s2) {
    // Write your code here
    // To debug (equivalent to var_dump): error_log(var_export($var, true));
    $js1 = $s1 ;
    $js2 = $s2 ;
  
  
     while($js1 != $js2) {
  
       if($js1 < $js2) {
          $strS1 = strval($js1);
          for($i= 0 ;$i < strlen($strS1) ; $i++) {
            $js1+= (int)$strS1[$i];
           } 
       }
       else {
        $strS2 = strval($js2);
        for($j=0; $j<strlen($strS2); $j++) {
          $js2+=(int)$strS2[$j];
         }
       }
  
       //var_dump("1:".$js1,"2:".$js2);
  
     }
  
    return $js2;
  }