<?php 
  $products = [
    ["name" => "Maslac", "price" => 49],
    ["name" => "Secer", "price" => 99],
    ["name" => "Jaja", "price" => 229],
    ["name" => "So", "price" => 110],
    ["name" => "Sirce", "price" => 200],
    ["name" => "Brasno", "price" => 160],
    ["name" => "Spageti", "price" => 400],
  ];

    function showProducts($products) {
        foreach($products as $product) {
            echo $product["name"] . ", " . $product["price"] . "\n";
        }
    }

    function getExpensive($products, $minPrice) {
    $result = [];                          

    foreach($products as $product) {       
        if($product["price"] > $minPrice){ 
            $result[] = $product;          
        }
    }

    return $result;      
}

echo "All products: \n";
showProducts($products);

echo "\nExpensive products (over 100):\n";
$expensive = getExpensive($products, 100);
showProducts($expensive);

?>