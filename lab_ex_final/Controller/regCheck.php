<?php
session_start();
require_once('../Model/userModel.php');

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $employerName = trim($_POST['employer_name']);
    $companyName = trim($_POST['company_name']);
    $contactNo = trim($_POST['contact_no']);
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Validate input fields
    if (empty($employerName) || empty($companyName) || empty($contactNo) || empty($username) || empty($password)) {
        echo "All fields are required!";
    } else {
        // Add employer to the database
        $status = addEmployer($employerName, $companyName, $contactNo, $username, $password);

        if ($status) {
            header('location: ../View/login.html'); // Redirect to login page on success
            exit;
        } else {
            echo "Error: Could not register the employer.";
        }
    }
} else {
    header('location: ../View/reg.html'); // Redirect to registration form if accessed directly
    exit;
}
?>
