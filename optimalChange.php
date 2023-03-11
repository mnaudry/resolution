<?php

class Change {
    public $bill10 = 0;
    public $bill5 = 0;
    public $coin2 = 0;
}


function optimalChange10($s) {
    $sum = $s ;

    if($sum < 10) {

        return NULL;
    }

    $change = new Change;
  
    $mod10 = $sum % 10 ;


    if($mod10 == 0) {
        $change->bill10 = $sum / 10 ;

        return $change;
    } 


    if($mod10 >= 5 ){
        $ret = optimalChange5($mod10) ;
 
        if(!is_null($ret)) {
            $change->bill10 = ($sum - $mod10)/ 10 ;
            $change->bill5 = $ret->bill5;
            $change->coin2 = $ret->coin2;

        }else {
            $change = null ;
        }

        return $change;

    }
    
    if($mod10 >= 2) {
        $ret = optimalChange2($mod10) ;

        if(!is_null($ret)) {
            $change->bill10 = ($sum - $mod10)/ 10 ;
            $change->coin2 = $ret->coin2;
        }else {
            $change = null ;
        }
    }
    


    return NULL ;

}


function optimalChange5($s) {
    $sum = $s ;
  
    if($sum < 5) {

        return NULL;
    }


    $mod5 = $sum % 5 ;

    $change = new Change;

    if($mod5 == 0) {
        $change->bill5 = $sum / 5 ;

        return $change;
    }
    

    
    if($mod5 >= 2) {
        $ret = optimalChange2($mod5) ;

        if(!is_null($ret)) {
            $change->bill5 = ($sum -$mod5) / 5 ;
            $change->coin2 = $ret->coin2;

        }else {
            $change = null ;
        }

        return $change;


    }
   

    return  NULL ;

}


function optimalChange2($s) {
    $sum = $s ;

    if($sum < 2)
        return NULL;

    $change = new Change;
  
    $mod2 = $sum % 2 ;

    if($mod2 == 0) {
        $change->coin2 = $sum / 2 ;

        return $change;
    }
    
    return  NULL ;

}

function optimalChange($s){
    
    $change = optimalChange10($s) ;

    if($change) {
        return $change ;
    }

    $change = optimalChange5($s) ;

    if($change) {
        return $change;
    }

    $change = optimalChange2($s) ;

    if($change) {
        return $change;
    }

}

var_dump(optimalChange(31));