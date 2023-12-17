<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}

$email = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lecturer Dashboard</title>
    
	<link rel="stylesheet" type="text/css" href="dashboard.css">
	
</head>
<body>
    <div >
        <h2>Welcome to the Advanced Technological Institute - Batticaloa</h2>
       
        <a href="logout.php" class="button">Logout</a>
    </div>
</body>
</html>
