<?php

$name = $_POST["name"];
$pass = $_POST["password"];
$regno = $_POST["regno"];




$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "s5project";
echo "test";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

// Perform database operations here...
$sql = "INSERT INTO user (name, regno, password) VALUES ('$name','$regno', '$pass')";

if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


// Close connection
$conn->close();
?>
