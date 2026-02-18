<?php
session_start();

// Agar user login nahi hai → login page bhejo
if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit();
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>

<h2>Welcome <?php echo $username; ?></h2>

<a href="logout.php">Logout</a>

</body>
</html>

