<?php
$products = [
    ["name" => "RTX 4090", "price" => 1599, "stock" => 3],
    ["name" => "CPU i9", "price" => 599, "stock" => 11],
    ["name" => "RAM 32GB", "price" => 1599, "stock" => 0],
    ["name" => "SSD 2TB", "price" => 89, "stock" => 22],
];

foreach($products as $product) {
    if($product["stock"] > 10) {
        echo "{$product['name']} (\${$product['price']}) - In Stock \n";
    } elseif($product["stock"] > 0) {
        echo "{$product['name']} (\${$product['price']}) - Low Stock({$product['stock']} left) \n";
    } else {
        echo "{$product['name']} (\${$product['price']}) - Out of Stock \n";
    }
}
?>