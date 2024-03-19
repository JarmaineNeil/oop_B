<?php
include 'database.php';

// Check if the ID is provided and it's a valid integer
if (isset($_POST['id']) && is_numeric($_POST['id'])) {
    $id = $_POST['id'];

    // Create a new instance of the database class
    $a = new database();

    // Delete the record from the "user" table where ID matches
    $a->delete('user', "id='$id'");
    
    // Redirect to a page after deletion
    header('Location: index.php');
    exit; // Stop further execution after redirection
} else {
    // Handle the case where ID is not provided or not valid
    echo "Invalid ID provided.";
    // You might want to redirect the user to an error page or perform other actions here
}
?>
