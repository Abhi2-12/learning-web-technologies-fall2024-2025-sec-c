<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
</head>
<body>
    <h1>Profile</h1>
    <p>ID: <?php echo $_SESSION['id']; ?></p>
    <p>Username: <?php echo $_SESSION['username']; ?></p>
    <p>USER TYPE <?php echo $_SESSION['role']; ?></p>
    <a href="<?php echo $_SESSION['role'] == 'admin' ? 'admin.php' : 'user.php'; ?>">Go Home</a>
</body>
</html>