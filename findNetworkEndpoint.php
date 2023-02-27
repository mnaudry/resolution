<?php

$findNetworkEndoint = function($startNodeId, $fromIds, $toIds){
    $actualStep = $startNodeId;
   // $step = null;
    $route =  $actualStep;

    $end = $actualStep;

    $length = count($fromIds);

    for($i= 0; $i<$length ; $i++){
        if($fromIds[$i] == $actualStep){
            $actualStep = $toIds[$i];
            $route .=" -> ".$actualStep;
        }
    }

    $end = $actualStep;
    echo $route."\n" ;

    return $end ;

};

$fromIds = [1, 7, 3, 4, 2, 6, 9];
$toIds = [3, 3, 4, 6, 6, 9, 5];

$startNodeId = 1;

echo $findNetworkEndoint($startNodeId, $fromIds, $toIds);