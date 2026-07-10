<?php

function getStockStatus($stock) {
    if($stock > 10) {
        return "In Stock";
    } elseif($stock >= 1) {
        return "Low Stock";
    } else {
        return "Out of Stock";
    }
}

function getPriceLabel($price) {
    if($price > 500) {
        return "Premium";
    } elseif($price >=100) {
        return "Mid-range";
    } else {
        return "Budget";
    }
}

$name1 = "RTX 4090";
$price1 = 1599;
$stock1 = 3;

echo $name1 . ": €" . $price1 . " | " . getPriceLabel($price1) . " | " . getStockStatus($stock1) . "\n";

$name2 = "RTX 5090";
$price2 = 1999;
$stock2 = 12;

echo $name2 . ": €" . $price2 . " | " . getPriceLabel($price2) . " | " . getStockStatus($stock2) . "\n";

$name3 = "SSD 1TB";
$price3 = 99;
$stock3 = 0;

echo $name3 . ": €" . $price3 . " | " . getPriceLabel($price3) . " | " . getStockStatus($stock3) . "\n";
?>