<?php
require_once '../Model/userModel.php';

//  POST method request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['username'], $_POST['email'], $_POST['phone'], $_POST['password'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];

        // addEditor function call
        if (addEditor($username, $email, $phone, $password)) {
            
            header('Location: ../View/editorlist.php');
            exit;
        } else {
            echo "Failed to add editor.";
        }
    } else {
        echo "All fields are required.";
    }
} else {
    echo "Invalid request method.";
}
