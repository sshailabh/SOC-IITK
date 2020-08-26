<?php
$servername = "localhost";
$username = "id6428605_destroyer1";
$password = "inspire";
$dbname="id6428605_csunshine";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";

$uname=$_POST["n1"];//"joseph";//convert username input to lowercase
$pword=$_POST["password"];//"4Dtsuvlj";//
//echo "try with small ".$uname;
$sql="SELECT pass,ans1,ans2,ans3 FROM chasing1 WHERE user='$uname' ";
//echo "statement found";
$result=$conn->query($sql);
//echo "<br>query run<br>";
if($result->num_rows > 0)
{
	//echo "no. of rows".$result->num_rows."<br>" ;
	$row = $result->fetch_assoc();
	//echo "until fetch ".$pword.$row["pass"];
	//echo "DATABASE OF ".$uname." FOUND <br>";
	  //  echo "ANS1 is equal to ".$row["ans1"]."<br>";
	    //echo "ANS2 is equal to ".$row["ans2"]."<br>";
	if($row["pass"] === $pword)
	{
        session_start();
		$_SESSION['n1']=$_POST['n1'];
	    include 'dashboard.php';
	    /*echo "DATABASE OF ".$uname." FOUND <br>";
	    echo "ANS1 is equal to ".$row["ans1"]."<br>";
	    echo "ANS2 is equal to ".$row["ans2"]."<br>";
	    echo "ANS3 is equal to ".$row["ans3"]."<br>";*/
	    //echo "how are you";
	}
	else
		echo "WRONG PASSWORD FOR ".$uname;
}
else
{
	echo "USERNAME ".$uname." NOT FOUND ";
}

$conn->close();

?>