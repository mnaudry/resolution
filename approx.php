<?php

class Point {
    public $x,$y;
}

function approx(array $pts) {
    $inside = 0;

    $nb = count($pts);

    foreach($pts as $pt) {
        
        $val = ($pt->x * $pt->x) + ($pt->y * $pt->y) ;
        if($val <= 1) {
            $inside ++;
        }
    }

    return $inside * 0.25 ;
}