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
$uname=$_POST["n1"];
$a1=$_POST["date"];//"white";//make everything in lowercase except username
$a2=$_POST["color"];//"male";
$a3=$_POST["city"];
//$a4=$_POST["####"];
$sql = "SELECT pass,ans1,ans2,ans3 FROM chasing1 WHERE user='$uname' ";
$result=$conn->query($sql);
//echo 'him';
if($result->num_rows > 0)
{
	$row = $result->fetch_assoc();
	if($a1 == $row['ans1'] and $a2 == $row['ans2'] and $a3 == $row['ans3'])
	{
		//echo "New tab"."<br>";
		session_start();
		$_SESSION['n1']=$uname;
		include 'ResetPassword.php';
	}
	else
	{
		echo "Some answers are wrong";
	}

}
else
{
	echo "No such username exists.";
}
$conn->close();
?> 