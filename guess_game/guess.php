<?php
$secret = 42;
?>
<!DOCTYPE html>
<html>
<head>
    <title>Guessing game for Mile Kostic</title>
</head>
<body>
<h1>Welcome to my guessing game</h1>
<?php

if ( !isset($_GET["guess"]) ) {
    echo "Missing guess parameter";

} elseif ( strlen($_GET["guess"]) < 1 ) {
    echo "Your guess is too short";

} elseif ( !is_numeric($_GET["guess"]) ) {
    echo "Your guess is not a number";


} else {
    $guess = (int) $_GET["guess"];

    if ($guess < $secret) {
        echo "Your guess is too low";
    } elseif ($guess > $secret) {
        echo "Your guess is too high";
    } else {
        echo "Congratulations - You are right";
    }
}
?>
</body>
</html>