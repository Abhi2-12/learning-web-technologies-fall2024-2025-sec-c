<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $cpassword = trim($_POST['cpassword']);
    $id = trim($_POST['id']);
    $role = trim($_POST['role']);

    if (empty($username) || empty($password) || empty($cpassword) || empty($id) || empty($role)) {
        echo "All fields must be filled.";
    } 
    else if ($password !== $cpassword) {
        echo "Passwords do not match.";
    } 
    else {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $user_data = "$username,$hashed_password,$role\n";
        file_put_contents("users.txt", $user_data, FILE_APPEND);

        header('Location: Login.php');
        exit;
    }
} else {
?>

<html lang="en">
<head>
    <title>Registration Form</title>
</head>
<body>
    <h2>Registration Form</h2>

    <form method="post" action="RegForm.php">
        <fieldset>
            <legend><h3>REGISTRATION</h3></legend>
            
            ID<br>
            <input type="number" name="id" id="id" required /><br><br>

            Password<br>
            <input type="password" name="password" id="password" required /><br><br>

            Confirm Password<br>
            <input type="password" name="cpassword" id="cpassword" required /><br><br>

            Name<br>
            <input type="text" name="username" id="username"  required /><br><br>

            User Type<br>
            <input type="radio" id="user" name="role" value="user" required>
            User
            <input type="radio" id="admin" name="role" value="admin" required>
            Admin<br>

            <input type="submit" name="submit" value="Sign UP" />
            <a href="login.php">Sign In</a>
        </fieldset>
    </form>
</body>
</html>


<?php
}
?>
