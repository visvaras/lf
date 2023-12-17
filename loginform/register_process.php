<?php

$servername = "localhost";  
$username = "root";
$password = "";
$dbname = "ATIWEB";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$designation = $_POST['designation'];
$courseID = $_POST['course'];
$gender = $_POST['gender'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

if (empty($name) || empty($email) || empty($designation) || empty($courseID) || empty($gender) || empty($password)) {
    die("All fields are required. Please go back and fill in the missing information.");
}

$stmt = $conn->prepare("INSERT INTO Lecturer (Name, Email, Designation, CourseID, Gender, Password) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssiss", $name, $email, $designation, $courseID, $gender, $password);

if ($stmt->execute()) {
   
    header("Location: login.php?registration_success=1");
} else {
    echo "Error: " . $stmt->error;
}


$stmt->close();
$conn->close();
?>
