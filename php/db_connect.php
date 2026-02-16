<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "banking_system"; // replace this

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
echo "Database connected successfully!";
