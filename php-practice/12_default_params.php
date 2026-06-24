<?php 
    function greetUser($name, $greeting = "Hello") {
        echo "{$greeting}, {$name}! \n";
    }

    function showProduct($name, $price, $currency = "$") {
        echo "{$name}: {$currency}{$price} \n";
    }

    greetUser("Mile", "Pozdrav");
    greetUser("Saska");
    greetUser("BIBI", "Cao");

    showProduct("GPU", 1500);
    showProduct("CPU", 145, "GBP");
    showProduct("SSD", 89);

?>