<?php

function calculateTotal($price, $quantity) {
    $result = $price * $quantity;
    return $result;
}

function applyDiscount($total, $percent) {
    $discount = $total * $percent / 100;
    return $total - $discount;
}

function formatPrice($amount) {
    return "$" . number_format($amount, 2);
}

$total = calculateTotal(345, 3);
$discounted = applyDiscount($total, 10);
$formatted = formatPrice($discounted);

echo "Final price: {$formatted}";
?>