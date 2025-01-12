<?php
session_start();
include('../model/userModel.php');

if (isset($_REQUEST['submit'])) {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if (empty($email) || empty($password)) {
        echo "Null email/password!";
    } else {
        // regular user
        $role = login($email, $password);
        if ($role) {
            $_SESSION['email'] = $email;
            $_SESSION['user_id'] = getUserIdByEmail($email);
            $_SESSION['role'] = $role;
            setcookie('status', 'true', time() + 3000, '/');
            
            
            if ($role === 'user') {
                header('location: ../view/home.php');
            }
        } else {
            //  admin
            $role = adminlogin($email, $password);
            if ($role) {
                $_SESSION['email'] = $email;
                $_SESSION['role'] = $role; 
                setcookie('status', 'true', time() + 3000, '/');
                header('location: ../view/adminhome.php');
            } else {
                // editor
                $role = editorlogin($email, $password);
                if ($role) {
                    $_SESSION['email'] = $email;
                    $_SESSION['role'] = $role;  // Set role to 'editor'
                    setcookie('status', 'true', time() + 3000, '/');
                    header('location: ../view/editorhome.php');
                } else {
                    echo "Invalid user!";
                }
            }
        }
    }
} else {
    header('location: ../view/login.html');
}
?>

