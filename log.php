<?php

$regno = $_POST["regno"];
$pass = $_POST["password"];





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

// Perform database operations here...


if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


// Close connection
$conn->close();
?>
