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

$errors = [];
$success = false;

if(isset($_POST["submit"]) && $found !== null) {
    $name = trim($_POST["name"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $quantity = (int)($_POST["quantity"] ?? 0);

    if(empty($name)) {
        $errors[] = "Name is required.";
    } if($email === "" || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Valid email is required.";
    } if($quantity < 1 || $quantity > $found['stock']) {
        $errors[] = "Quantity must be between 1 and " . $found['stock'] . ".";
    } if(empty($errors)) {
        $success = true;
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Product</title>
</head>
<body>
    <h1>Order Product</h1>
    <?php if ($found === null) {
    echo "<p>Product not found.</p>";
    echo '<a href="index.php">Back to shop</a>';
} else {
    if($success) {
    $total = $found['price'] * $quantity;
    echo "<h2>=== Order Confirmed ===</h2>";
    echo "<p>Customer: " . htmlspecialchars($name) . "</p>";
    echo "<p>Email: " . htmlspecialchars($email) . "</p>";
    echo "<p>Product: " . htmlspecialchars($found['name']) . "</p>";
    echo "<p>Quantity: " . $quantity . "</p>";
    echo "<p>Total: $" . number_format($total, 2) . "</p>";
    echo '<a href="index.php">Back to shop</a>';
    } elseif(!empty($errors)) {
        foreach($errors as $error) {
        echo "<p style='color:red'>" . $error . "</p>";
    }
    }
    echo "<h2>Ordering: " . htmlspecialchars($found['name']) . "</h2>";
    echo "<form method='post' action='order.php?id=" . $id . "'>";
    echo "<p>Name: <input type='text' name='name'></p>";
    echo "<p>Email: <input type='email' name='email'></p>";
    echo "<p>Quantity: <input type='number' name='quantity' min='1' max='" . $found['stock'] . "'></p>";
    echo "<input type='submit' name='submit' value='Place Order'>";
    echo "</form>";
}
?>
</body>
</html>