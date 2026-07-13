<?php
$products = [
    [
        "id" => 1,
        "name" => "RTX 5070",
        "category" => "GPU",
        "price" => 559.99,
        "stock" => 10,
        "description" => "This is the description for RTX 5070.",
        
    ],
    [
        "id" => 2,
        "name" => "Ryzen 9 7950X",
        "category" => "CPU",
        "price" => 329.99,
        "stock" => 15,
        "description" => "This is the description for Ryzen 9 7950X.",
    ],
    [
        "id" => 3,
        "name" => "Corsair Vengeance LPX 32GB",
        "category" => "RAM",
        "price" => 139.99,
        "stock" => 20,
        "description" => "This is the description for Corsair Vengeance LPX 32GB.",
    ],
    [
        "id" => 4,
        "name" => "Samsung 980 PRO 1TB",
        "category" => "Storage",
        "price" => 149.99,
        "stock" => 25,
        "description" => "This is the description for Samsung 980 PRO 1TB.",
    ],
    [
        "id" => 5,
        "name" => "MSI B650 Tomahawk WiFi",
        "category" => "Motherboard",
        "price" => 459.99,
        "stock" => 10,
        "description" => "This is the description for MSI B650 Tomahawk WiFi.",
    ],
    [
        "id" => 6,
        "name" => "Corsair RM850x",
        "category" => "PSU",
        "price" => 129.99,
        "stock" => 30,
        "description" => "This is the description for Corsair RM850x.",
    ]
];

function getStockStatus($stock) {
        if ($stock > 10) {
            return "In Stock";
        } elseif($stock >= 1) {
            return "Low Stock";
        } else {
            return "Out of Stock";
        }
    }

    function getPriceLabel($price) {
        if ($price < 100) {
            return "Budget";
        } elseif ($price >= 100 && $price <= 500) {
            return "Mid-range";
        } else {
            return "Premium";
        }
    }


?>