<?php
// Connect to the model
require_once '../Model/userModel.php';

// Check if the editor_id is passed via GET request
if (isset($_GET['editor_id'])) {
    $editor_id = $_GET['editor_id'];
    
    // Call the deleteEditor function
    if (deleteEditor($editor_id)) {
        // Redirect to the editor list page after deletion
        header('Location: ../View/editorlist.php');
        exit;
    } else {
        echo "Failed to delete editor.";
    }
} else {
    echo "Invalid editor ID.";
}
