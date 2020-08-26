<?php
$servername = "localhost";
$username = "id6428605_destroyer1";
$password = "inspire";
$dbname = "id6428605_csunshine";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
session_start();
//echo 'scan';
$uname=$_SESSION['n1'];
$newpas=$_POST['pas'];
$sql="UPDATE chasing1 SET pass='$newpas' where user='$uname'";
if($conn->query($sql) === TRUE)
{

	//echo "password update successful";
	include 'index.php';
}
else
{
	echo "PASSWORD update of ".$uname." failed.";
}
$conn->close();


?> 