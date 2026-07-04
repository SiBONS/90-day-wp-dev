<?php 
$productName = "RTX 4090";
$numStock = 11;
if($numStock > 10) {
echo "{$productName}: In Stock";
} elseif($numStock > 0) {
echo "{$productName}: Low Stock - only {$numStock} left";
} else {
echo "{$productName}: Out of Stock";
}
?>