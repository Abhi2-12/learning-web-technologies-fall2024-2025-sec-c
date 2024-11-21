<?php
    session_start();
    if (isset($_REQUEST['submit'])) {

        
        $name = trim($_POST['name']);

        
        if ($name == null) {
            echo "Null name!"; 
        } elseif (str_word_count($name) < 2) {
            echo "Contain at least two words."; 
        } elseif (!ctype_alpha($name[0])) {
            echo "Must start with a letter.";
        } else {
            $allowed = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ.- ";
            $valid = true;
            for ($i = 0; $i < strlen($name); $i++) {
                if (strpos($allowed, $name[$i]) === false) {
                    $valid = false;
                    break;
                }
            }

            if (!$valid) {
                echo "invalid characters";
            } else {
                $_SESSION['status'] = true;
                echo "Name: " . htmlspecialchars($name); 
                
            }
        }
    } else {
        header('location: name.html');
    }
?>
