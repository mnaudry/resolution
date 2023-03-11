<?php


function findNetworkEndpoint($startNodeId, array $fromIds, array $toIds) {
  
    $route = $startNodeId;
  
    /*foreach($fromIds as $key => $from) {
      if($from == $route){
        if($route == $toIds[$key]){
          break;
        }
        $route = $toIds[$key];
      }
    }
    $end = $route;*/

    $end = false ;

    $route = $startNodeId;

    while(!$end) {
        $found = false ;
        $lastroute = null ;

        foreach($fromIds as $key => $from) {
            if($from == $route){
              $route = $toIds[$key];
              $found = true;
            }
        }

        if(!$found) {
            $end = true ;
        } else {

            if($lastroute == $route) {
                $end = true;
            }
            else {
                $found = false ;
                $lastroute = $route;
            }
           
        }
    }
    
    return $route;
  }

  //$fromIds = [1, 7, 3, 4, 2, 6, 9];
  //$toIds = [3, 3, 4, 6, 6, 9, 5] ;
//$startNodeId =2 ;
/*$fromIds = [4,9,  6, 1 ];
$toIds = [9, 5, 1, 4];
$startNodeId = 6;*/


$fromIds = [11, 7, 10, 9, 8, 4, 1];
$toIds = [1,10, 11, 10, 11, 8, 4] ;
$startNodeId =9 ;
var_dump(findNetworkEndpoint($startNodeId, $fromIds, $toIds));
