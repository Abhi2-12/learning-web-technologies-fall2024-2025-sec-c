<?php
/*session_start();
include('../model/userModel.php');

// Ensure the user is logged in
if (!isset($_SESSION['email'])) {
    header("Location: login.php"); // Redirect to login page if not logged in
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get updated user details from the form
    $userId = getUserIdByEmail($_SESSION['email']);
    $username = $_POST['username'];
    $email = $_POST['email']; // Email should be readonly, no change
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    // Update user details
    $updateStatus = updateUser($userId, $username, $email, $phone, $password);

    if ($updateStatus) {
        header('Location: ../view/profile.php'); // Redirect back to profile page after update
        exit();
    } else {
        echo "Failed to update profile.";
    }
}*/




session_start();
include('../model/userModel.php');

// Ensure the user is logged in
if (!isset($_SESSION['email'])) {
    header("Location: login.php"); // Redirect to login page if not logged in
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get updated user details from the form
    $userId = getUserIdByEmail($_SESSION['email']);
    $username = $_POST['username'];
    $email = $_POST['email']; // Email should be readonly, no change
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $preferences = isset($_POST['preferences']) ? $_POST['preferences'] : []; // Array of category IDs from the form

    // Validate the form fields
    if ($username == null || $phone == null || empty($password) || empty($email)) {
        echo "Null username/password/email!";
    } else {
        // Update user information in the database
        $updateStatus = updateUser($userId, $username, $email, $phone, $password);

        // If user details are updated successfully, proceed to update preferences
        if ($updateStatus) {
            // If preferences are provided, first delete the old preferences, then save the new ones
            if (!empty($preferences)) {
                // First, remove old preferences
                deleteUserPreferences($userId);

                // Save new preferences
                saveUserPreferences($userId, $preferences);
            }

            // Redirect to the profile page after successful update
            header('Location: ../view/profile.php');
            exit();
        } else {
            echo "Failed to update profile.";
        }
    }
} else {
    header('Location: ../View/profile.php');
    exit();
}

?>
