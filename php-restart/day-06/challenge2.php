<?php 
$product = [
    "name" => "RTX 3090",
    "brand" => "nVidia",
    "price" => 799,
    "stock" => 1,
    "category" => "Graphics Cards"
];

echo "Our product is {$product['name']} \n";
echo "Brand of the product is {$product['brand']} \n";
echo "Current price is {$product['price']} \n";
echo "We currently have this product {$product['stock']} in stock \n";
echo "The category you are checking of this product is {$product['category']} \n";
    if($product["stock"] > 10) {
        echo " Product is In Stock";
    } elseif($product["stock"] >= 1) {
        echo " Product is Low Stock";
    } else {
        echo " Product is Out of Stock";
    }

    if($product["price"] > 500) {
        echo " Product is Premium \n";
    } else {
        echo " Product is Standard \n";
    }
?>