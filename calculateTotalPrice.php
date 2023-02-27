<?php
$calculateTotalPrice = function(array $prices, $discount) {

    $price_discount = max($prices);

    $total_price = 0 ;
    $find = false ;

    foreach($prices as $price) {
        $tmp_price = $price ;
        if(!$find && $tmp_price == $price_discount) {
            $tmp_price  = $price - (($tmp_price * $discount) / 100);
        }

        $total_price += $tmp_price;
    }

    return floor($total_price);

   return $total_price;
};

$prices =  [20,10,30,20,10];

$discount = 15;

echo $calculateTotalPrice($prices,$discount)."\n";

