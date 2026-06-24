<?php
$products = [
    ["name" => "RTX 4090", "price" => 1599, "stock" => 3],
    ["name" => "CPU i9", "price" => 599, "stock" => 11],
    ["name" => "RAM 32GB", "price" => 1599, "stock" => 0],
    ["name" => "SSD 2TB", "price" => 89, "stock" => 22],
];

function getStockStatus($stock) {
    if($stock > 10) {
        return "In Stock";
    } elseif($stock > 0) {
        return "Low Stock";
    } else {
        return "Out of Stock";
    }
}

function showInventory($products) {
    foreach($products as $product) {
        $status = getStockStatus($product["stock"]);
        echo $product["name"] . " (\$" .  $product["price"] . ") - " . $status . "\n";
    }
}
showInventory($products);
?>