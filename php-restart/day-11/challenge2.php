<?php

$_POST = ["username" => "mile", "email" => "mile@example.com", "age" => "38", "submit" => "1"];

if(isset($_POST["submit"])) {
    $errors = [];
    $name = trim($_POST["username"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $age = trim($_POST["age"] ?? "");
    if(empty($name)) {
    $errors[] = "Username is required.";
    } elseif(strlen($name) < 3) {
    $errors[] = "Username must be at least 3 characters.";
    }

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Invalid email format.";
    }

    if(!is_numeric($age) || $age < 18 || $age > 120) {
    $errors[] = "Age must be between 18 and 120.";
    }
    if(!empty($errors)) {
    foreach($errors as $error) {
        echo $error . "<br>";
    }
    } else {
        echo "Form submitted successfully!";
    }
}
