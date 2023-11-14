<?php
// Retrieve form data
$username = $_POST['username'];
$password = $_POST['password'];

// Connect to MySQL database
$servername = "sql12.freesqldatabase.com";
$db_username = "sql12661972";
$db_password = "1ZKlA74YNB";
$dbname = "sql12661972";

// Create connection
$conn = new mysqli($sql12.freesqldatabase.com, $sql12661972, $1ZKlA74YNB, $sql12661972);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to insert data into the table
$sql = "INSERT INTO your_table_name (username, password) VALUES ('$username', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
