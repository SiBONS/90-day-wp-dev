<?php
function showInventory($products) {
    foreach($products as $product) {
        echo "{$product['name']} - €{$product['price']}";
        if($product["stock"] > 10) {
            echo "[In Stock] \n";
        } elseif($product["stock"] >= 1) {
            echo "[Low Stock] \n";
        } else {
            echo "[Out of Stock] \n";
        }
    }
}

$myProducts = [
    ["name" => "RTX 4090", "price" => 1299, "stock" => 2],
    ["name" => "RTX 3060", "price" => 499, "stock" => 0],
    ["name" => "RTX 2060 Super", "price" => 199, "stock" => 4],
    ["name" => "RTX 3060", "price" => 499, "stock" => 0],
    ["name" => "RTX 5060 Ti", "price" => 450, "stock" => 22]
];

showInventory($myProducts);

?>