<?php

$_POST = ["author" => "Mile Kostic", "email" => "kostic@na.com", "comment" => "PHP WEB Knowledge is great!", "submit" => "1"];

if(isset($_POST["submit"])) {
    $errors = [];
    $author = trim($_POST["author"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $comment = trim($_POST["comment"] ?? "");

    if(empty($author)) {
    $errors[] = "Username is required.";
    }

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Invalid email format.";
    }

    if(empty($comment) || strlen($comment) < 10)  {
    $errors[] = "Comment must be at least 10 chars and not empty";
    }

    if(!empty($errors)) {
        foreach($errors as $error) {
        echo $error . "<br>";
        }
    } else {
       $safeAuthor = htmlspecialchars($author);
       $safeEmail = htmlspecialchars($email);
       $safeComment = htmlspecialchars($comment);

        echo "--- Comment ---\n";
        echo "Author: " . $safeAuthor . "\n";
        echo "Email: " . $safeEmail . "\n";
        echo "Comment: " . $safeComment . "\n";
        echo "---------------\n";
    }

}



?>