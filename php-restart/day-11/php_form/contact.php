<?php
if(isset($_POST["submit"])) {
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $subject = trim($_POST["subject"]);
    $message = trim($_POST["message"]);
    $errors = [];
    if(empty($name)) {
        $errors[] = "Name is required.";
    }
    if(filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        $errors[] = "Invalid email address.";
    }
    if(empty($subject)) {
        $errors[] = "Subject is required.";
    }
    if(strlen($message) < 20) {
        $errors[] = "Message must be at least 20 characters long.";
    }

    if(empty($errors)) {
        $safeName = htmlspecialchars($name);
        $safeEmail = htmlspecialchars($email);
        $safeSubject = htmlspecialchars($subject);
        $safeMessage = htmlspecialchars($message);
       echo "=== Contact Form Submission ===<br>";
        echo "From: " . $safeName . " (" . $safeEmail . ")<br>";
        echo "Subject: " . $safeSubject . "<br>";
        echo "Message: " . $safeMessage . "<br>";
        echo "==============================<br>";
    } else {
        echo "The following errors occurred:\n";
        foreach($errors as $error) {
            echo "- " . $error . "\n";
        }
    }

} else {
    echo "No form submitted.";
}
?>