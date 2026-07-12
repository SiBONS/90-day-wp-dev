<?php

$_POST = ["username" => "mile_dev", "password" => "php123", "submit" => "1"];

if(isset($_POST["submit"])) {
    $name = trim($_POST["username"] ?? "");
    $password = trim($_POST["password"] ?? "");
    if ($name !== "mile_dev") {
        echo "Unknown username";
    } elseif ($password !== "php123") {
        echo "Incorrect password";
    } else {
        echo "Success! Welcome back!";
    }
} else {
    echo "Form is not submitted.";
}

?>