<?php
function showProduct($productName, $price, $currency = "€") {
    echo "{$productName}: {$currency}{$price} \n";
}

showProduct("RTX 5090", 1555);
showProduct("RTX 4090", 1299);
showProduct("Ryzen 7 5800X3D", 355, "$");
showProduct("i9 12900K", 455, "£");
?>