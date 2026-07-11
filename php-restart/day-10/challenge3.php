<?php

$_GET = ["temp" => "25", "unit" => "celsius"];

if(!isset($_GET["temp"])) {
    echo "Temperature is required.";
} elseif(!is_numeric($_GET["temp"])) {
    echo "Temperature must be a number";
} elseif(!isset($_GET["unit"])) {
    echo "Unit is required.";
} elseif($_GET["unit"] !== "celsius" && $_GET["unit"] !== "fahrenheit") {
    echo "Unit must be celsius or fahrenheit.";
} else {
    $temp = (float) $_GET["temp"];
    if($_GET["unit"] === "celsius") {
        $temp = ($temp * 9/5) + 32;
        echo $temp;
    } elseif($_GET["unit"] === "fahrenheit") {
        $temp = ($temp - 32) * 5/9;
        echo $temp;
    }
}

?>