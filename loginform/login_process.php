<?php
session_start();
$servername = "localhost";  
$username = "root";
$password = "";
$dbname = "ATIWEB";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM Lecturer WHERE Email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
 
    if (password_verify($password, $row['Password'])) {
        
        $_SESSION['email'] = $email;
        
        header("Location: dashboard.php");
    } else {
       
        header("Location: login.php?login_error=1");
    }
} else {
   
    header("Location: login.php?login_error=1");
}

$stmt->close();
$conn->close();
?>
