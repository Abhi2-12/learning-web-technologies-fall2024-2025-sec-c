<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['loggedin']) || !$_SESSION['loggedin']) {
    header("Location: login.html");
    exit();
}

// Retrieve the user data from the session
$user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
</head>
<body>
    <h1>Welcome, <?= htmlspecialchars($user['name']); ?>!</h1>
    <p><strong>Email:</strong> <?= htmlspecialchars($user['email']); ?></p>
    <p><strong>Gender:</strong> <?= htmlspecialchars($user['gender']); ?></p>
    <p><strong>Date of Birth:</strong> <?= htmlspecialchars($user['dob']); ?></p>
    <p><strong>Blood Group:</strong> <?= htmlspecialchars($user['blood_group']); ?></p>
    <p><strong>Degrees:</strong> <?= htmlspecialchars($user['degrees']); ?></p>
    <a href="logout.php">Logout</a>
</body>
</html>
