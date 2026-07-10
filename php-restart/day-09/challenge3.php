<?php 

function calculateOrderSummary($products, $discount) {
    $subtotal = 0;
    $itemCount = 0;

    foreach($products as $product) {
       $subtotal += $product["price"] * $product["quantity"];
       $itemCount += $product["quantity"];
    }

    $discountAmount = $subtotal * ($discount / 100);
    $total = $subtotal - $discountAmount;

    return [
        "subtotal" => $subtotal,
        "discountAmount" => $discountAmount,
        "total" => $total,
        "itemCount" => $itemCount
    ];

}

$myProducts = [
    ["name" => "RTX 3090", "price" => 1399, "quantity" => 22],
    ["name" => "RTX 6090", "price" => 4399, "quantity" => 1],
    ["name" => "RX 7090 XT", "price" => 299, "quantity" => 5],
];

$summary = calculateOrderSummary($myProducts, 10);

echo "Items: " . $summary["itemCount"] . "\n";
echo "Subtotal: " . $summary["subtotal"] . "\n";
echo "Discount: " . $summary["discountAmount"] . "\n";
echo "Total: " . $summary["total"] . "\n";
?>