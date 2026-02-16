<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['fullname'];   // we map fullname → username
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Check password match
    if ($password != $confirm_password) {
        echo "Passwords do not match!";
        exit();
    }

    // Hash password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert query (MATCH YOUR TABLE)
    $sql = "INSERT INTO users (username, email, password)
            VALUES ('$username', '$email', '$hashed_password')";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../login.html");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>
