<?php

function solve($imageWidth, $imageHeight, array $image, $patternWidth, $patternHeight, array $pattern) {

    $first = $pattern[0];
    $findit = false ;

    $useImage = $image;

    $usePattern = $pattern;

    $ret = [-1,-1];

    $isQual = function($key,$imageHeight,$pos,$length,$image,$pattern) {
       
        $rep = true ;
        foreach($pattern as $pat) {
            $subImage = substr($image[$key],$pos,$length);
           
            if($subImage != $pat) {
                $rep = false ;
                break;
            }

            $key++;
            if($key > $imageHeight) {
                $rep = false ;
                break;
            }
                
        }


        return $rep;
    };

    foreach($useImage as $key => $img){
        $pos = strpos($img,$first);
        var_dump($key,$pos);
        if($pos !== false){
            $length = strlen($first);

            if($isQual($key,$imageHeight,$pos,$length,$image,$pattern)) {

               $ret = [$pos,$key];
               break;
            }
        }
    }

    return $ret;
}
/*
$image =["012","343","012"] ;
$imageWidth = 3 ;
$imageHeight = 3;

$pattern = ["12","43"];
$patternWidth = 2;
$patternHeight = 2;  */

/*$image =["01","12"] ;
$imageWidth = 2 ;
$imageHeight = 2;

$pattern = ["2"];
$patternWidth = 1;
$patternHeight = 1;*/


$image =["000","111","222"] ;
$imageWidth = 3 ;
$imageHeight = 3;

$pattern = ["11","22"];
$patternWidth = 2;
$patternHeight = 2;

var_dump(solve($imageWidth, $imageHeight, $image, $patternWidth, $patternHeight, $pattern));




