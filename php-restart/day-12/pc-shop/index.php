<?php require_once 'data.php';

    
    $category = $_GET['category'] ?? "all";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PC Parts Shop</title>
</head>
<body>
    <h1>PC Parts Shop</h1>
    <a href="index.php">All</a> |
    <a href="index.php?category=GPU">GPU</a> |
    <a href="index.php?category=CPU">CPU</a> |
    <a href="index.php?category=RAM">RAM</a> |
    <a href="index.php?category=Storage">Storage</a> |
    <a href="index.php?category=Motherboard">Motherboard</a> |
    <a href="index.php?category=PSU">Power Supply</a>

    <?php
    foreach ($products as $product) {
        if ($category === "all" || $product['category'] === $category) {
            echo "<h2>{$product['name']}</h2>";
            echo "<p>Category: {$product['category']}</p>";
            echo "<p>Price: \${$product['price']} (" . getPriceLabel($product['price']) . ")</p>";
            echo "<p>Stock Status: " . getStockStatus($product['stock']) . "</p>";
            echo "<p>Description: {$product['description']}</p>";
            echo "<a href='product.php?id={$product['id']}'>View Details</a>";
        }
    }

    ?>
</body>
</html>