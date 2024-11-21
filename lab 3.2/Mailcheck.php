<?php
session_start(); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email'];

    $_SESSION['email'] = $email;

    if (empty($email)) {
        echo "Empty email.";
    } 
    elseif (strpos($email, '@') === false || strpos($email, '.') === false) {
        echo "Invalid email";
    } 
    else {
        echo "Valid: " . htmlspecialchars($email);
    }
}
?>
