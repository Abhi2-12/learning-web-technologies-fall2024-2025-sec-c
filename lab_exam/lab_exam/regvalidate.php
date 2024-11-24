<?php
session_start();

if (isset($_POST['submit'])) {
    
    $errors = [];

    // Name
    $name = trim($_POST['name']);
    if (empty($name)) {
        $errors[] = "Name is required!";
    } elseif (str_word_count($name) < 2) {
        $errors[] = "Name must contain at least two words!";
    } elseif (!ctype_alpha($name[0])) {
        $errors[] = "Name must start with a letter!";
    } else {
        $allowed_chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ.- ";
        for ($i = 0; $i < strlen($name); $i++) {
            if (strpos($allowed_chars, $name[$i]) === false) {
                $errors[] = "Name contains invalid characters!";
                break;
            }
        }
    }

    // Email
    $email = trim($_POST['email']);
    if (empty($email)) {
        $errors[] = "Email is required!";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format!";
    }

    // gender
    $gender = $_POST['gender'] ?? '';
    if (empty($gender)) {
        $errors[] = "Gender is required!";
    }

    // DOB
    $day = $_POST['day'];
    $month = $_POST['month'];
    $year = $_POST['year'];
    if (!checkdate($month, $day, $year)) {
        $errors[] = "Invalid date of birth!";
    } else {
        $dob = "$year-$month-$day";
    }

    // BD
    $blood_group = $_POST['blood_group'];
    $blood_groups = ["A+", "A-", "B+", "B-", "AB+", "AB-", "O+", "O-"];
    if (!in_array($blood_group, $blood_groups)) {
        $errors[] = "Invalid blood group!";
    }

    // Degree
    $degrees = $_POST['degree'] ?? [];
    if (empty($degrees)) {
        $errors[] = "At least one degree must be selected!";
    }

    
    if (empty($errors)) {
        $_SESSION['user'] = [
            'name' => $name,
            'email' => $email,
            'gender' => $gender,
            'dob' => $dob,
            'blood_group' => $blood_group,
            'degrees' => implode(', ', $degrees), ];
        header("Location:homee.php"); 
        exit();
    } else {
        $_SESSION['errors'] = $errors;
        header("Location:reg.html");
        exit();
    }
} else {
    header("Location: reg.html");
    exit();
}
?>
