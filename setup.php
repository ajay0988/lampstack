<?php
//require_once("credentials.php");
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
//echo $HOSTNAME;
$conn = new mysqli(getenv('HOSTNAME'),getenv('ROOT_USERNAME'),getenv('ROOT_PASSWORD'));
// Creating a connection
//$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Creating a database named newDB
$db=getenv('DB_NAME');
$sql="CREATE DATABASE $db";
//$sql = "CREATE DATABASE newDB";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
}else {
    echo "Error creating database: " . $conn->error;
}

$link = mysqli_connect(getenv('HOSTNAME'),getenv('ROOT_USERNAME'),getenv('ROOT_PASSWORD'),getenv('DB_NAME'));
//$link = mysqli_connect("192.168.43.225","root","ajay","mydb");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
//$db="CREATE DATABASE '$getenv('DB_NAME')'";
$table="CREATE TABLE IF NOT EXISTS `records` (`id` MEDIUMINT NOT NULL AUTO_INCREMENT, `message` VARCHAR(255), PRIMARY KEY (`id`));";
//$result= mysqli_query($link,$db);
$res=mysqli_query($link,$table);
echo '<script><h1 style="text-align:center">Created database and table into mysql server successfully</h1></script>';

