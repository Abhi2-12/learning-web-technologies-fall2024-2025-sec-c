<?php
    session_start();

    // Check if the user is logged in and the 'status' cookie is set
    if (!isset($_COOKIE['status']) || $_SESSION['role'] !== 'admin') {
        header('location: login.html'); 
        exit();
    }

    include('../model/userModel.php');
  
    $totalPost = getTotalPost();    
    $totalUsers = getTotalUsers();
    $totalCategories = getTotalCategories();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home</title>

</head>
<body>

<header>
    <center><h1>Admin Dashboard</h1>
</header>

<nav>
    <a href="../view/editorlist.php">Editor</a>
    <a href='logout.php'>Logout</a>
</nav>


</body>
</html>
