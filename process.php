<?php
// Get form data
$name = $_POST['name'];
$email = $_POST['email'];

// Create a connection to your RDS database
$servername = "your-database-hostname";
$username = "your-username";
$password = "your-password";
$dbname = "your-database-name";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert data into the database
$sql = "INSERT INTO user_data (name, email) VALUES ('$name', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "Data stored successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
