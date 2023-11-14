<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Perform necessary actions with the data, like database operations or validation
    // For example, connecting to the database and inserting the data
    
    // Redirect to the home page after successful registration
    header("Location: home.html");
    exit();
}
?>
