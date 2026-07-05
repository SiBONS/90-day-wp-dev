<?php
$pcComponents = ["RTX 4090", "Samsung 990 Pro SSD", "Ryzen 5800X3D"];
echo count($pcComponents) . "\n";
$pcComponents[1] = "Cooler Master 750W Bronze 80";
$pcComponents[] = "PC Tower Chieftec Hunter 2"; 
$pcComponents[] = "RTX 4060 Ti";
echo count($pcComponents) . "\n";
echo $pcComponents[0] . "\n";
echo $pcComponents[1] . "\n";
echo $pcComponents[4] . "\n";
?>