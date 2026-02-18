<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get form data
    $username = $_POST['fullname'];
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
    $customer_id = rand(10000000, 99999999);


    // Insert into database
    $sql = "INSERT INTO users (username, email, password)
            VALUES ('$username', '$email', '$hashed_password')";

    if ($conn->query($sql) === TRUE) {

        // Redirect to login page
        header("Location: login.php");
        exit();

    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>
