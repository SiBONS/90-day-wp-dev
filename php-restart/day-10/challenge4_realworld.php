<?php

$_GET = ["category" => "CPU", "maxPrice" => "1600", "inStock" => "4"];

$category = $_GET["category"] ?? "all";
$maxPrice = (int) ($_GET["maxPrice"] ?? 999999);
$inStock = (int) ($_GET["inStock"] ?? 0);

$products = [
    ["name" => "RTX 4090", "category" => "GPU", "price" => 1599, "stock" => 3],
    ["name" => "i9 14900K", "category" => "CPU", "price" => 799, "stock" => 4],
    ["name" => "Kingston Fury Beast 16GB", "category" => "RAM", "price" => 499, "stock" => 11],
    ["name" => "Seagate Baracuda 22TB", "category" => "HDD", "price" => 799, "stock" => 1],
    ["name" => "Samsung 990 PRO 3TB", "category" => "SSD", "price" => 299, "stock" => 0],
    ["name" => "Chieftec Tower 2", "category" => "TOWER", "price" => 199, "stock" => 22],
];

$count = 0;
foreach($products as $product) {
    if($category !== "all" && $product["category"] !== $category) continue;
    if($product["price"] > $maxPrice) continue;
    if($inStock === 1 && $product["stock"] === 0) continue;
    
    echo $product["name"] . " — €" . $product["price"] . " — Stock: " . $product["stock"] . "\n";
    $count++;
}

echo "Total matches " . $count . "\n";

?>