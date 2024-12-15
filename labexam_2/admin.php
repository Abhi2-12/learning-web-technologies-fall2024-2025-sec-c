<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['role'] != 'admin') {
    header("Location: LogIN.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
</head>
<body>
<center> <h4>Admin home page</h4> 
    <h1>Welcome <?php echo $_SESSION['username']; ?>!</h1>
    <a href="view.php">View Users</a><br>
    <a href="profile.php">Profile</a><br>
    <a href="change_password.php">Change Password</a><br>
    <a href="logout.php">Logout</a></center>
</body>
</html>