<?php
// $servername = "localhost:3307";
// $db_username = "root";
// $password = "";
// $dbname = "demoproject";

// // Create connection
// $conn = new mysqli($servername, $db_username, $password, $dbname);

//Get Heroku ClearDB connection information
$cleardb_url = parse_url("mysql://be39a3f3c6dc73:36a3f8be@us-cdbr-east-05.cleardb.net/heroku_d9e1dea0ab8f11f?reconnect=true");
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"],1);
$active_group = 'default';
$query_builder = TRUE;
// Connect to DB
$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$usn = $_POST['usn'];
$passwd = $_POST['password'];

$sql = "SELECT username FROM userdata where usn = \"$usn\" and passwd = \"$passwd\" ";
$result = $conn->query($sql);

if ($result->num_rows == 1)
{
    $row = $result->fetch_assoc();
    $_POST['name']=$row["username"];
    

} else {
    $_SESSION['login_error'] = "true";
    header("Location: login.php");
    exit;
}


$conn->close();
?>