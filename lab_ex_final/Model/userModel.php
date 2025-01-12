<?php
function getConnection(){
    $conn = mysqli_connect('127.0.0.1', 'root', '', 'labfinal');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}


// Login function for admin users
function adminlogin($email, $password) {
    // Check admin credentials
    $conn = getConnection();
    $sql = "SELECT * FROM admin WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 1) {
        return 'admin';  // Return 'admin' role if credentials match
    }
    return false;
}
////////////////////add employer////////////////////////

function addEmployer($employerName, $companyName, $contactNo, $username, $password) {
    $conn = getConnection();
    $sql = "INSERT INTO employer (employer_name, company_name, contact_no, username, password) VALUES ('{$employerName}', '{$companyName}', '{$contactNo}', '{$username}', '{$password}')";

    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        return false;
    }
}


function getEmployers() {
    $conn = getConnection();
    $sql = "SELECT * FROM employer";
    $result = mysqli_query($conn, $sql);
    $employers = [];
    
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $employers[] = $row;
        }
    }
    
    return $employers;
}



?>