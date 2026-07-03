<?php
$product1 = "RTX 4090";
$product2 = "CPU i9";
$product3 = "SSD 2TB";

$price1 = 599.994;
$price2 = 499.675;
$price3 = 199.553;

$quantity1 = 11;
$quantity2 = 5;
$quantity3 = 4;

$subtotal1 = $price1 * $quantity1;
$subtotal2 = $price2 * $quantity2;
$subtotal3 = $price3 * $quantity3;

$total = $subtotal1 + $subtotal2 + $subtotal3;

$vat = $total * (20/100);

$grandTotal = $total + $vat;

echo "The subtotal for {$product1} is " . round($subtotal1, 2) . "\n";

echo "The subtotal for {$product2} is " . round($subtotal2, 2) . "\n";

echo "The subtotal for {$product3} is " . round($subtotal3, 2) . "\n";

echo "The total price of all products without VAT is " . round($total, 2) . "\n";

echo "The VAT of total amount is " . round($vat, 2) . "\n";

echo "The grand total price, including vat is " . round($grandTotal, 2) . "\n";
?>