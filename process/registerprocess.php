<?php
$servername = "localhost";
$db_username = "root";
$password = "";
$dbname = "demoproject";

// Create connection
$conn = mysqli_connect($servername, $db_username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
    
}

// prepare and bind
$stmt = $conn->prepare("INSERT INTO userdata (`usn`, `name` ,`sem`,`mbno`,`email`,`password`) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssiss",$usn, $username, $semester, $mobile_no, $email, $passwd);

// set parameters and execute
$username = $_POST['name'];
$semester = $_POST['sem'];
$usn = $_POST['usn'];
$mobile_no = $_POST['mbno'];
$email = $_POST['email'];
$passwd = $_POST['password'];

$stmt->execute();

echo "Registered successfully";

$stmt->close();
$conn->close();
?>