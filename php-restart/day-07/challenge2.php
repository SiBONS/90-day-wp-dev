<?php
$products = [
    "RTX 4090" => 1299,
    "RTX 3060" => 499,
    "Samsung 2TB" => 199,
    "RX 7600" => 299,
    "i9 12900K" => 599
];

foreach($products as $name => $price) {
    if($price > 500) {
        echo "{$name}: {$price} - Premium \n"; 
    } else {
        echo "{$name}: {$price} - Budget \n";
    }
}
?>