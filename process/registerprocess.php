<?php



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
}else{
    
}

// prepare and bind
$stmt = $conn->prepare("INSERT INTO userdata (username, semester ,usn, mobile_no, email, passwd) VALUES ( ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssiss", $username, $semester,$usn, $mobile_no, $email, $passwd);

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