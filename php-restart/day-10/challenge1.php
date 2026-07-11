<?php

$_GET = ["product" => "RTX4090", "price" => "1599", "stock" => "5"];

if(isset($_GET["product"])) {
    $product = $_GET["product"];
    echo "Product: {$product} \n";
    $price = (int) $_GET["price"];
    $stock = (int) $_GET["stock"];
    echo "Price: {$price} \n";
    echo "Stock: {$stock} \n";
} else {
    echo "No product specified \n";
}

?>