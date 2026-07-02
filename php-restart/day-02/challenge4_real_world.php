<?php
$recName = "Mile";
$senderName = "DEV//LOG Shop Team";
$productName = "RTX 4090";
$orderNumber = "1234";
$delDate = "July 5, 2026";
$message = "";
$message .= "Subject: Your order #{$orderNumber} has shipped! \n \n";
$message .= "Hi {$recName}, \n \n";
$message .= "Great news! Your order #{$orderNumber} for the {$productName} \n";
$message .= "is on its way and will arrive by {$delDate}. \n \n";
$message .= "Thank you for shopping with us! \n \n";
$message .= "Best regards, \n The {$senderName}";
echo $message;
?>