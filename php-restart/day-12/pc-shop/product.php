<?php
require_once 'data.php';

$id = (int)($_GET['id'] ?? 0);

$found = null;

foreach ($products as $product) {
    if ($product['id'] === $id) {
        $found = $product;
        break;
    } 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
</head>
<body>
    <h1>Product Details</h1>
    <?php if ($found === null) {
        echo "<p>Product not found.</p>";
    } else {
       echo "<p>Category: {$found['category']}</p>";
       echo "<p>Price: \${$found['price']} (" . getPriceLabel($found['price']) . ")</p>";
       echo "<p>Stock Status: " . getStockStatus($found['stock']) . "</p>";
       echo "<p>Description: {$found['description']}</p>";
        echo '<a href="order.php?id=' . $found['id'] . '">Order Now</a>';
        echo " | ";
        echo '<a href="index.php">Back to shop</a>';
    }
     ?>
</body>
</html>