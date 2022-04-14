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
}

$usn = $_POST['usn'];
$passwd = $_POST['password'];

$sql = "SELECT * FROM userdata where `usn` = '$usn' and `password` = '$passwd'"; 
$result = $conn->query($sql);

if ($result->num_rows == 1)
{
    $row = $result->fetch_assoc();
    $_POST['name']=$row["name"];
    

} else {
    $_SESSION['login_error'] = "true";
    header("Location: login.php");
    exit;
}


$conn->close();
?>